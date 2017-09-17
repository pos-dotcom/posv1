<?php

namespace ComprasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComprasController extends Controller
{
    public function indexAction(Request $request)
    {
       $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('ComprasBundle:ComprasEnc')
                    ->findAll();
             return $this->render('ComprasBundle:Default:ComprasLista.html.twig',compact("datos"));
            //return $this->render('ComprasBundle:Default:bTemplate.html.twig',compact("datos"));
            
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
        
        return $this->render('ComprasBundle:Default:index.html.twig');
    }
    
    
    public function verCompraAction($codigoCompraEnc)
    {
        //$session = $request->getSession();
        //if ($session->has("id")) {
            
            $datoscompra = $this->getDoctrine()
                    ->getRepository('ComprasBundle:ComprasDet')
                    ->findBy(array('codigoCompraEnc'=> $codigoCompraEnc));
            return $this->render('ComprasBundle:Default:verDetalleCompra.html.twig',compact("datoscompra"));
          //  return $this->render('ComprasBundle:Default:remTemplate.html.twig',compact("datoscompra"));
            
       // } else {
       //     $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
       //     return $this->redirect($this->generateUrl('login'));
        
        // }  
        
    }
}
