<?php

namespace customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use customerBundle\Entity\Options;
use customerBundle\Entity\Users;


class registerController extends Controller
{
	//  public function loginAction(){

    //     $request = $this->getrequest();
    //     if($request->getMethod() == 'GET'){
    //        $userDetails = $request->get('user');
    //         $status = $request->get('status');
    //         if($status == 0){
    //             //prx('user not found');
    //         }else{
                
    //         }
    //      }   
    //     return $this->render('customerBundle:Default:login.html.twig');
    // }

    public function signinAction(){
        $request = $this->getrequest();
        $email = $request->get('email');
        $password= $request->get('password');

       if($request->getMethod() == 'POST'){
            if(!empty($email) && !empty($password)){
                // check database if exist
                $em = $this->getDoctrine()->getManager();
               $userDetails =  $em->getRepository('customerBundle:Users')->findOneBy(
                array('userEmail' => $email,
                      'userPassword' => $password
                    ));
               if(!empty($userDetails)){
                    $session = new Session();
                    $session->set('loginUser',$email);
					//$customerSqlClass = new customerSqlClass($em);
					
                    return $this->redirect($this->generateUrl('index', array('loginUser' => $session->get('loginUser'), 'status'=> 1)));
               }
               // if not found 
               else{
                    return $this->redirect($this->generateUrl('login', array('user' => $email, 'status' => 0)));
               }
           }
        }
        return $this->render('customerBundle:Default:login.html.twig');
    }
    
    public function signupAction(){
    	$request = $this->getrequest();
    	if ($request -> getMethod() == 'POST') {
    		$email= $request->get('email');
	    	$password=$request->get('password');
 			$em = $this->getDoctrine()->getManager();
 			$check = $em->getRepository('customerBundle:Users')->findOneBy(array('userEmail'=>$email));
 			if(empty($check)){
 				$userobject = new Users();
 				$userobject->setUserEmail($email);
 				$userobject->setUserPassword($password);
 				$userip = $_SERVER['REMOTE_ADDR'];
 				$userobject->setUserIp($userip);
 				$userobject->setUserMobile(NULL);
 				$userobject->setUserAltNo(NULL);
                $userobject->setUserVerified(0);
                //prx($userobject);
              	$em->persist($userobject);
 				$em->flush();
                return $this->redirect($this->generateUrl('login',array('useremail' => $email, 'active'=> 1)));
 				
 				
 			}
 			else {
                return $this->redirect($this->generateUrl('login',array('useremail' => $email, 'active'=> 1, 'user_registered'=> 1)));
 				
 				
 			}
    	}
	    	    	

        return $this->render('customerBundle:Default:index.html.twig');
    }
     public function logoutAction(){

        $Session = new Session();
        if($Session->has('loginUser')){
        	$Session->remove('loginUser');
        	return $this->redirect($this->generateUrl('index'));
        }else{
        	return $this->redirect($this->generateUrl('index'));
        }
    }
    
}
