<?php

namespace customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use customerBundle\Entity\Options;
use customerBundle\Entity\Users;
use customerBundle\Entity\Cart;
use customerBundle\Entity\customerSqlClass;



class DefaultController extends Controller
{
    public function indexAction(){
        
        $session = new Session();
        if($session->has('loginUser')){
                      
            return $this->render('customerBundle::layout.html.twig',array('loginUser' =>$session->get('loginUser') ));   
            // return $this->render('customerBundle:order:orderPage.html.twig',array('products'=> $productdetails));
        }
    	return $this->render('customerBundle::layout.html.twig' );
    }

    public function headerAction($loginUser = ""){
    	if  (isset($loginUser)){
            $loginUser = $loginUser;
            $em = $this->getDoctrine()->getEntityManager();
            $count = new customerSqlClass($em);
            $cartCount= $count->getCartCount($loginUser);
            return $this->render('customerBundle::header.html.twig',array('loginUser' => $loginUser, 'cartCount'=>$cartCount));
        }  
        else{
            $loginUser = ''; 
        } 
     	return $this->render('customerBundle::header.html.twig',array('loginUser' => $loginUser));
    }
     public function footerAction(){
    	 return $this->render('customerBundle::footer.html.twig');
    }
     public function contentAction(){
        $em = $this->getDoctrine()->getManager();
        $customerSqlClass = new customerSqlClass($em);
        $ProductCategories = $customerSqlClass->getProductCategories();
        $Brands = $customerSqlClass->getProductBrands();
        $productdetails= $customerSqlClass->getallproducts();
        //prx($productdetails);

        if(!empty($Brands)){
            $arrTemp = array();
            $arrData = array();
           
            foreach ($Brands as $key => $value) {
                $strExplode = explode('_',$value);
                $arrTemp['brandId'] = $key;   
                $arrTemp['brandName'] = $strExplode[0];   
                $arrTemp['categoryId'] = $strExplode[1];
                $arrData[] = $arrTemp; 
            }
            
            
        }
        
        
       
        return $this->render('customerBundle::content.html.twig',array(
            'products' => $productdetails,
            'categories' => $ProductCategories,
            'brands' => $arrData
        ));
        
    }
     public function productsAction(){
        $request = $this->getrequest();
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $customerSqlClass = new customerSqlClass($em);
        $details = $customerSqlClass->getProductDetails($id);
      
        $session = new Session();
     	if ($session->has('loginUser')) {
        return $this->render('customerBundle:Default:products.html.twig', array('loginUser'=>$session->get('loginUser'),'entities'=> $details));
        }

     	return $this->render('customerBundle:Default:products.html.twig',array('entities'=> $details));
        }
    
    
    public function categoryAction(){
       $request = $this->getrequest();
       $id= $request->get('id');
       $em = $this->getDoctrine()->getManager();
       $size = new customerSqlClass($em);
       $new = $size->getSize($id);
       //$arrt = $atemp = array();
       $data = $this->render('customerBundle:Default:getFilters.html.twig',array('arrData' => $new));
	   $ProductTableObj = $em->getRepository('customerBundle:Products')->findBy(array('productCategoryId' => $id));
	   $arrTemp = $arrResult =  $arrData = array();
	   if(!empty($ProductTableObj)){
			foreach($ProductTableObj as $key => $val){
				$arrTemp['productId']   = $val->getProductId();
				$arrTemp['productName'] = $val->getProductName();
				$arrTemp['productId']   = $val->getProductId();
				$arrTemp['productPrice']= $val->getProductPrice();
				$arrTemp['productImg']  = $val->getProductImg();
				$arrTemp['sizeId']      = $val->getsizeId();
				$arrData[] = $arrTemp;
			}	
	   }  
	     
       $getProducts = $this->render('customerBundle:Default:getProducts.html.twig',array('Data' => $arrData));
	   $arrResult['products'] = $getProducts->getContent();
	   $arrResult['filters'] = $data->getContent();
	  
	   return new Response(json_encode($arrResult));
        
    }
    public function brandAction(){
        $request = $this->getrequest();
        $id= $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $brand = new customerSqlClass($em);
        $new = $brand->getbrand($id);
        $data = $this->render('customerBundle:Default:Brand.html.twig',array('arrData'=> $new));
        return new Response($data->getContent());
    }
    public function cartAction(){
        $request = $this->getrequest();
        $em= $this->getDoctrine()->getManager();
        $session = new Session();
        $userId= $session->get('loginUser');
 

        if($data = $request->get('data')){
           
           $cartProducts= $em->getRepository('customerBundle:Cart')->findBy(array('userId'=>$userId));
           if(!empty($cartProducts)){
                $data = $this->render('customerBundle:Default:cart.html.twig', array('data'=>$cartProducts));
                return new Response($data->getContent());
            }
            else{
                return new Response('Your Cart is Empty');

            }
        }
        if($data= $request->get('rem') && $user = $session->has('loginUser')){
            $removeProduct= $request->get('id');
            $removeObject = array();
           // pr($removeProduct);
            $removeRow = $em->getRepository('customerBundle:Cart')->findOneBy(array('productId'=>$removeProduct,'userId'=>$userId));
            $removeObject['id']= $removeRow->getId();
            $em->remove($removeRow);
            $em->flush();
            $em = $this->getDoctrine()->getEntityManager();
            $count = new customerSqlClass($em);
            $cartCount= $count->getCartCount($userId);
            return new Response($cartCount);
          
        }
        if ($session->has('loginUser')) {
            $id= $request->get('id');
            $customerSqlClass = new customerSqlClass($em);
            $details = $customerSqlClass->getProductDetails($id);
            $Qty = 1;
            $cartdata= array();
            $itemCart = new Cart();
            $Exqty= 0;
            $cartTableproduct = $em->getRepository('customerBundle:Cart')->findOneBy(array('productId' => $id, 'userId'=>$userId));
            if(!empty($cartTableproduct)){
                
                $Exqty = $cartTableproduct->getQuantity();
                $Exprice = $cartTableproduct->getPrice();
                $fQty = $Exqty + $Qty;
                $fprice = $Exprice * $fQty;
                $cartTableproduct->setQuantity($fQty);
                $cartTableproduct->setTotalPrice($fprice);
                $em->flush();
                // To update Count in the Cart
                $em = $this->getDoctrine()->getEntityManager();
                $count = new customerSqlClass($em);
                        
                $cartCount= $count->getCartCount($userId);
                             
                return new Response($cartCount);

            }
            else{
                
                    if(!empty($details)){
                        foreach($details as $key=>$value){
                        $cartdata['productId']= $value['productId'] ;
                        $cartdata['productName']= $value['productName'] ;
                        $cartdata['quantity']= $Qty;
                        $cartdata['color']= $value['optionName'] ;
                        $cartdata['price']= $value['productPrice'];
                        $cartdata['size']= $value['size'];
                        $cartdata['totalPrice'] = $value['productPrice']* $Qty;
                        $cartdata['productImg'] = $value['productImg'];
                        $cartdata['productName'] = $value['productName'];
                        $cartdata['size'] = $value['size'];
                        
                        }
                        $itemCart->setQuantity($cartdata['quantity']);
                        $itemCart->setProductId($cartdata['productId']);
                        $itemCart->setColor($cartdata['color']);
                        $itemCart->setPrice($cartdata['price']);
                        $itemCart->setTotalPrice($cartdata['totalPrice']);
                        $itemCart->setip($_SERVER['REMOTE_ADDR']);
                        $itemCart->setUserId($userId);
                        $itemCart->setproductImg($cartdata['productImg']);
                        $itemCart->setproductName($cartdata['productName']);
                        $itemCart->setSize($cartdata['size']);
                        $em->persist($itemCart);
                        $em->flush();
                        $em = $this->getDoctrine()->getEntityManager();
                        $query = $em->createQuery('Select count(c) from customerBundle:Cart c WHERE c.userId = :email')->setParameter('email',$userId);       
                        $cartCount = $query->getResult();
                                
                        return new Response($cartCount[0][1]);
                       // return new Response('The product has been added in the Cart');
                    }
                   
                }
        }
        else{
            return new Response(0);
        }
       
    }

    
    public function productAction(){
        $request = $this->getrequest();
        $id = $request->get('id');
        $size = $request->get('size');
       
        $em= $this->getDoctrine()->getManager();
        $products = new customerSqlClass($em);
        $data = $products->getproductbybrand($id,$size);
       
        $product = $this->render('customerBundle:Default:getProducts.html.twig',array('Data'=> $data));
        return new Response($product->getContent());
        //prx($product->getContent());


    }
    public function contentsAction(){
        $request = $this->getrequest();
        //$onproduct= $request->get('id');
        $em= $this->getDoctrine()->getManager();
        $products = new customerSqlClass($em);
        $productsdetails= $products->getallproducts();
        $data = $this->render('customerBundle:Default:contents.html.twig',array('Data'=>$productsdetails));
        return new Response($data->getContent());
       // prx($data);
    }
    public function CartcountAction(){
        prx(1);
    }

      
}
