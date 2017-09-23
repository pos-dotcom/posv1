<?php

namespace ComprasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ComprasBundle\Form\ComprasEncType;
use ComprasBundle\Entity\ComprasEnc;


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
    
    public function addAction(Request $request)
    {
            $session = $request -> getSession();
            if ($session->has("id")) 
            {
              $compra=new ComprasEnc();
              $form = $this->createForm(ComprasEncType::class,$compra);
              $form->handleRequest($request);
              if($form->isSubmitted() && $form->isValid())
              {
                  $em=$this->getDoctrine()->getManager();
                  $em->persist($compra);
                  $em->flush();
                  
                  return $this->redirect($this->generateUrl('editcompra',array('codigoCompraEnc'=>$compra->getCodigoCompraEnc())));                 
              }
              
              return $this->render('ComprasBundle:Default:addCompra.html.twig', array("form" => $form->createView()));
                 
            }
            else
            {
                $this->get('session')->getFlashbag()->add('Mensaje','Debe estar logueado para mostrar este contenido');
                return $this->redirect($this->generateUrl('login'));
              
            }
        
    }
    
    public function editAction($codigoCompraEnc,Request $request)
    {
        $compraEnc=New ComprasEnc();
        $datos= $this->getDoctrine()
                     ->getRepository('ComprasBundle:ComprasEnc')
                     ->find($codigoCompraEnc);
        
        if (!$datos)
        {
            throw $this->createNotFoundException('No existe compra con valor '. $codigoCompraEnc);
            
        }
        else
        {
            return $this->render('ComprasBundle:Default:ComprasDet.html.twig', compact("datos"));            
        }
         
        
    }
    

    
    
}
