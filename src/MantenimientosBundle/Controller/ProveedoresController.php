<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MantenimientosBundle\Entity\Proveedor;
use MantenimientosBundle\Form\ProveedorType;    

class ProveedoresController extends Controller
{
    public function indexAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
            $datos=$this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Proveedor')
                    ->findAll();
           
             return $this->render('MantenimientosBundle:Catalogos:ListaProveedores.html.twig',compact("datos"));
        }
        else
        {
              $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
               return $this->redirect($this->generateUrl('login'));
             
        } 
       
    }
    
    public function addAction(Request $request) {
        $pro =new Proveedor();
        $form=$this->createForm(ProveedorType::class,$pro);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pro);
            $em->flush();
            //return $this->redirectToRoute('index');
            return $this->redirect($this->generateUrl('proveedores'));
        }
        
        return $this->render('MantenimientosBundle:Catalogos:AddProveedor.html.twig',array("form"=> $form->createView()));
    }
    
    public function listacategoriasAction()
    {
        $datos=$this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Categorias')
                    ->findAll();
        return $this->render('MantenimientosBundle:Catalogos:ListaCategorias.html.twig',compact("datos"));
    }
}
