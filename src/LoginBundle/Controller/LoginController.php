<?php

namespace LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('LoginBundle:Login:login.html.twig');
    }
    
    
    public function loginAction(Request $request)
    {
        if($request->getMethod()=="POST")
        {
            $usuario=$request->get("usuario");
            $pass=$request->get("clave");
            //echo "usuario:".$usuario."<br>passs:".$pass;exit;
            $user=$this->getDoctrine()->getRepository('LoginBundle:Usuarios')->findOneBy(array("usuario"=>$usuario,"clave"=>$pass));
            if($user)
            {
                $session=$request->getSession();
                $session->set("id",$user->getId());
                $session->set("nombre",$user->getNombre());
                //echo $session->get("nombre");exit;
               // return $this->redirect($this->generateUrl('login_homepage'));
                 return $this->redirect($this->generateUrl('tablero'));
               
                //die("si, si hola");
            }   
            else
            {
               
               
               $this->get('session')->getFlashBag()->add('Mensaje', 'Los datos ingresados no son validos');
               return $this->redirect($this->generateUrl('login'));
               
               
            }
             
            
            
        }
        
        
        return $this->render('LoginBundle:Login:login.html.twig');
    }
}
