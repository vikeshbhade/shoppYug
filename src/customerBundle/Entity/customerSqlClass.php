<?php

namespace customerBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class customerSqlClass
{
    private $em;
    public function __construct($em){
       $this->em = $em;
      
    }

    public function getProductDetails($productId = '') {
        
        if(empty($productId)){
            return array();
        }
        else{
                
                $fields = array(
                        'pro.productId',
                        'pro.productName',
                        'pro.modelNo', 
                        'pro.brandId', 
                        'pro.productPrice',
                        'pro.productWeight',
                        'pro.productDetails',
                        'pro.productDescription',
                        'pro.productCategoryId', 
                        'pro.productAddDate',
                        'pro.productImg', 
                        'pro.productStock',
                        'pro.productOfferPrice',
                        'pro.productActive', 
                        'pro.colorId','optc.optionName',
                        'pro.sizeId','opt.size'
                        );
                if(empty($em))
                    $em = $this->em;

                $query = $this->em->createQueryBuilder();
                $query
                    ->select($fields)
                    ->from('customerBundle:Products', 'pro')
                    ->innerJoin('customerBundle:OptionSize','opt','WITH',"pro.sizeId = opt.id")
                    ->innerJoin('customerBundle:ServiceMasterColor','optc','WITH',"pro.colorId = optc.optionId")
                    ->where("pro.productId = $productId" );

                    return   $query->getQuery()->getResult();

            }
        }
        public function getProductColor($productId){
            if(empty($productId)){
                return array();

            }
            else{
                 $fields = array(
                        'pro.productId',
                        'pro.productName',
                        'pro.modelNo', 
                        'pro.brandId', 
                        'pro.productPrice',
                        'pro.productWeight',
                        'pro.productDetails',
                        'pro.productDescription',
                        'pro.productCategoryId', 
                        'pro.productAddDate',
                        'pro.productImg', 
                        'pro.productStock',
                        'pro.productOfferPrice',
                        'pro.productActive', 
                        'pro.colorId','optc.optionName',
                        'pro.sizeId','opt.size');
                if(empty($em))
                    $em = $this->em;

                $query = $this->em->createQueryBuilder();
                $query
                    ->select($fields)
                    ->from('customerBundle:Products', 'pro')
                    ->innerJoin('customerBundle:OptionSize','opt','WITH',"pro.sizeId = opt.id")
                    ->innerJoin('customerBundle:ServiceMasterColor','optc','WITH',"pro.colorId = optc.optionId")
                    ->where("pro.productId = $productId" );

                    return   $query->getQuery()->getResult();

            }

        }

        public function getProductCategories(){
           
                if(empty($em)){
                    $em = $this->em;
                    $data = array();
                    $arrdata = array();
                    $products = $em->getRepository('customerBundle:ProductCategory')->findAll();
                    if(!empty($products)){
                        foreach ($products as $key => $value) {
                            $data[$value->getcategoryId()] = $value->getcategoryName();   
                        }
                        
                        return $data;
                    }
                }
            
        }

         public function getProductBrands(){
           
                if(empty($em)){
                    $em = $this->em;
                    $data = array();
                    $arrdata = array();
                    $products = $em->getRepository('customerBundle:Brand')->findAll();
                    if(!empty($products)){
                        foreach ($products as $key => $value) {
                            $data[$value->getId()] = $value->getName().'_'.$value->getCategoryId();   
                        }
                        
                        return $data;
                    }
                }
            
        }

        public function getSize($id){
            $fields = array('DISTINCT pcs.productSize');
            $query = $this->em->createQueryBuilder();
            $arrResult = $arrTemp = $arr =array();
            $query-> select($fields)
                  -> from ('customerBundle:ServiceMasterProductColorSize','pcs')
                  -> where("pcs.categoryId ='$id'");
            $catId = $query->getQuery()->getResult();
            //prx($catId);
            foreach($catId as $arr){
                foreach($arr as $k=>$v){
                    $arrTemp[] = $v;
                    
                }
            }
            $ar= implode("','",$arrTemp);
            $category = $this->getSizename($ar);
            return $category;
        }  
        public function getSizename($id){
            $fields= array('s.size');
            $query = $this->em->createQueryBuilder();
            //prx($id);
            $query -> select('s')
                   -> from('customerBundle:OptionSize','s')
                   ->where("s.id in ('$id')");
            $category= $query->getQuery()->getResult();
            return $category;
        }
        public function getbrand($id){
            
            $brands = $this->em->getRepository('customerBundle:Brand')->findBy(array('categoryId'=>$id));
            return $brands;
            
        }
        public function getallproducts(){
            $fields = array(
                'pro.productId',
                'pro.productName',
                'pro.modelNo', 
                'pro.brandId', 
                'pro.productPrice',
                'pro.productWeight',
                'pro.productDetails',
                'pro.productDescription',
                'pro.productCategoryId', 
                'pro.productAddDate',
                'pro.productImg', 
                'pro.productStock',
                'pro.productOfferPrice',
                'pro.productActive', 
                'pro.colorId','optc.optionName',
                'pro.sizeId','opt.size','b.name');
            $query = $this->em->createQueryBuilder();
            $arrdata = $arrtemp = array();

                $query
                    ->select($fields)
                    ->from('customerBundle:Products', 'pro')
                    ->innerJoin('customerBundle:OptionSize','opt','WITH',"pro.sizeId = opt.id")
                    ->innerJoin('customerBundle:ServiceMasterColor','optc','WITH',"pro.colorId = optc.optionId")
                    ->innerJoin('customerBundle:Brand','b','WITH',"pro.brandId = b.id");

           $products= $query->getQuery()->getResult();
           
           return $products;
           
        }
        public function getproductbybrand($id='',$size=''){
            $fields = array(
                'pro.productId',
                'pro.productName',
                'pro.modelNo', 
                'pro.brandId', 
                'pro.productPrice',
                'pro.productWeight',
                'pro.productDetails',
                'pro.productDescription',
                'pro.productCategoryId', 
                'pro.productAddDate',
                'pro.productImg', 
                'pro.productStock',
                'pro.productOfferPrice',
                'pro.productActive', 
                'pro.colorId','optc.optionName',
                'pro.sizeId','opt.size','b.name');
            $query = $this->em->createQueryBuilder();
            $arrdata = $arrtemp = array();
            $condition = '';
            if($id !=''){
                $ar= implode("','",$id);
            }
            else{
                $ar ='';

            }

            if(!empty($ar)){
                $condition = " AND b.id in ('$ar')";
            }
            if($size != ''){
                $arr = implode("','",$size); 
            }
            else{
                $arr = '';
            }

            if(!empty($arr)){
                $condition .= " AND pro.sizeId in ('$arr')";
            }
           
            
                                     
                $query
                    ->select($fields)
                    ->from('customerBundle:Products', 'pro')
                    ->innerJoin('customerBundle:OptionSize','opt','WITH',"pro.sizeId = opt.id")
                    ->innerJoin('customerBundle:ServiceMasterColor','optc','WITH',"pro.colorId = optc.optionId")
                    ->innerJoin('customerBundle:Brand','b','WITH',"pro.brandId = b.id")
                    ->where(" 1 = 1 ".$condition." ");

           $products= $query->getQuery()->getResult();
           return $products;
        //   prx($products);
           
        }

        public function getCartCount($loginUser){
            $query = $this->em->createQuery('Select count(c) from customerBundle:Cart c WHERE c.userId = :email')
            ->setParameter('email',$loginUser);       
            $cartCount = $query->getResult();
            return $cartCount[0][1];
        }
		
        // public function getUserId($email = ''){
			
        //     if(!empty($email)){
		// 		if(empty($em)){
		// 			$em  = $this->em;
		// 		}
		// 			$user = $em->getRepository(Users::class)->findOneByemail($email);
		// 			prx($user);				
		// 	}
		// 	prx(2);
        // }
}
