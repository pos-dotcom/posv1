<?php

namespace ProductosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
       $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('ProductosBundle:productos')
                    ->findBy(array('bActivo'=> 'S'));
            
                    //->findAll();//OneBy(array('bActivo'=>"S"));
            // return $this->render('MantenimientosBundle:Catalogos:ListaProductos.html.twig', compact("datos"));
            return $this->render('ProductosBundle:Default:ProductosLista.html.twig',compact("datos"));
            //  return $this->render('MantenimientosBundle:Catalogos:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
        
    }
}
