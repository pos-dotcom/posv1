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
            
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }  
    }
    
    public function verCompraAction(Request $request)
    {
        $session = $request->getSession();
        if ($session->has("id")) {
            // $compra=$request->get("usuario");
            $datoscompra = $this->getDoctrine()
                    ->getRepository('ComprasBundle:ComprasDet')
                    ->findBy(array('codigoCompraEnc'=> 1));
             return $this->render('ComprasBundle:Default:verDetalleCompra.html.twig',compact("datoscompra"));
            
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }  
    }
}
