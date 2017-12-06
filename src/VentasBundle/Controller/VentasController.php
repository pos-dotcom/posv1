<?php

namespace VentasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use VentasBundle\Entity\VentasEnc;
use VentasBundle\Entity\VentasDet;
use ProductosBundle\Entity\Kardex;

class VentasController extends Controller
{
    public function indexAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
            $datos=$this->getDoctrine()
                    ->getRepository('VentasBundle:VentasEnc')
                    ->findAll();
            return $this->render('VentasBundle:Default:VentasLista.html.twig',  compact("datos"));
        }
        else
        {
            $this->get("session")->getFlashBag()->add('Mensaje','Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
            
        }
        
        return $this->render('VentasBundle:Default:VentasLista.html.twig');
    }
    
    public function addAction(Request $request)
    {
        $session=$request->getSession();
        if ($sesion->has("id"))
        {
           $venta= new VentaEnc();
           $fecha= \Datetime('today');
           $venta->setFechaIngreso($fecha);
           $venta->setMontoTotal(0.00);
           
           $form->$this->createForm(VentasEnctype::class,$venta);
           $form->handleRequest($request);
           if($form->isSubmitted() && $form->isValid())
           {
                $em->getDoctrine()->getManager();
                $em->persist($venta);
                $em->flush();
                return $this->redirect($this->generateUrl('editventa',array('codigoVentaEnc'=>$venta->getCodigoVentaEnc())));
               
           }
           
           return $this->render('VentasBundle:Default:addVenta.html.twig',array("form"=>createView()));
            
        }
        else
        {
           
            $this->get('session')->getFlashbag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login')); 
            
        }
        
        
    }
}
