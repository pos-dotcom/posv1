<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CatalogosController extends Controller
{
    public function indexAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
            
           
             return $this->render('MantenimientosBundle:Catalogos:index.html.twig');
        }
        else
        {
              $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
               return $this->redirect($this->generateUrl('login'));
             
        } 
       
    }
    
    public function listacategoriasAction()
    {
        $datos=$this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Categorias')
                    ->findAll();
        return $this->render('MantenimientosBundle:Catalogos:ListaCategorias.html.twig',compact("datos"));
    }
}
