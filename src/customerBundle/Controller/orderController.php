<?php

namespace customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use customerBundle\Entity\Address;
use customerBundle\Entity\customerSqlClass;

class orderController extends Controller
{
    public function indexAction(){
    	 $session = new Session();
        if ($session->has('loginUser')) {
            return $this->render('customerBundle:order:orderPage.html.twig', array('loginUser'=>$session->get('loginUser')));
           
        }
    	return $this->render('customerBundle:order:orderPage.html.twig');
    }
    public function paymentAction(){
        $session = new Session();
       if ($session->has('loginUser')) {
           return $this->render('customerBundle:order:payment.html.twig', array('loginUser'=>$session->get('loginUser')));
          
       }
       return $this->render('customerBundle:order:payment.html.twig');
   }
   public function reviewAction(){
    $session = new Session();
    if ($session->has('loginUser')) {
       return $this->render('customerBundle:order:review.html.twig', array('loginUser'=>$session->get('loginUser')));
    }
    return $this->render('customerBundle:order:review.html.twig');
}
    public function shippingAction(){
        $session = new Session();
        if ($session->has('loginUser')) {
            return $this->render('customerBundle:order:shipping.html.twig', array('loginUser'=>$session->get('loginUser')));
        }
        return $this->render('customerBundle:order:shipping.html.twig');
    }

    public function saveShippingAction(){
        $session = new Session();
        //$userId = $session->get('loginUser');
		//$userId = $this->container->getParameter('UserArray');
		//$userId->setParameter(1);
		$session->get('loginUser');
        if ($session->has('loginUser')) {
            $request= $this->getRequest();
            $userId = $session->get('loginUser'); 
            $firstName= $request->get('firstName');
            $lastName= $request->get('lastName');
            $address1= $request->get('address1');
            $address2= $request->get('address2');
            $landmark= $request->get('landmark');
            $states= $request->get('states');
            $country= 'IN';
			
            if(!empty($firstName) && !empty($lastName) && !empty($address1) && !empty($landmark)){
                $em = $this->getDoctrine()->getManager();
                $Addressobj = new Address();
				//$customerSqlClass = new customerSqlClass($em);
				
				$userDetails = $customerSqlClass->getUserId($session->get('loginUser'));
                $Addressobj->setUserId($userId);
                $Addressobj->setZipcode('440014');
                $Addressobj->setCity('Nagpur');
                $Addressobj->setState($userId);
                $Addressobj->setAddress1($userId);
                $Addressobj->setAddress2($userId);
                $Addressobj->setLandmark($userId);
                $Addressobj->setAddressType($userId);
            }
        }
		prx(2);
	}
}
   

