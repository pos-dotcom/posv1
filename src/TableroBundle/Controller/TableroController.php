<?php

namespace TableroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

     

class TableroController extends Controller
{
    public function indexAction(Request $request)
    {
        
        $session=$request->getSession();
        if($session->has("id"))
        {
            
            return $this->render('TableroBundle:Tablero:home.xhtml.twing');
        }
        else
        {
              $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
               return $this->redirect($this->generateUrl('login'));
             
        }  
      
        
    }
    
    public function tableroAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
             
            return $this->render('TableroBundle:Tablero:home.html.twig');
        }
        else
        {
              $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
               return $this->redirect($this->generateUrl('login'));
             
        }  

    }
}
