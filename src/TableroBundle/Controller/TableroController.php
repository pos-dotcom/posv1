<?php

namespace TableroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TableroController extends Controller
{
    public function indexAction()
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
             return $this->render('LoginBundle:Default:index.html.twig');
        }
        else
        {
              $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
               return $this->redirect($this->generateUrl('login'));
             
        }  
       // return $this->render('TableroBundle:Default:index.html.twig');
        
    }
    
    public function tableroAction()
    {
        
        $session=$request->getSession();
        if($session->has("id"))
        {
             //return $this->render('LoginBundle:Default:index.html.twig');
             return $this->render('TableroBundle:Tablero:tablero.html.twig');
        }
        else
        {
              $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
               return $this->redirect($this->generateUrl('login'));
             
        }  
        //return $this->render('TableroBundle:Tablero:tablero.html.twig');
    }
}
