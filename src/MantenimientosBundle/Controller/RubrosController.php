<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MantenimientosBundle\Entity\Rubros;
use MantenimientosBundle\Form\rubrosType;

class RubrosController extends Controller
{
    public function indexAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id"))
        {
            $datos=$this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Rubros')
                    ->findAll();
           
             return $this->render('MantenimientosBundle:Catalogos:ListaRubros.html.twig',compact("datos"));
        }
        else
        {
              $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
               return $this->redirect($this->generateUrl('login'));
             
        } 
       
    }
    
    
     public function addAction(Request $request) {
        $rbr =new Rubros();
        $form=$this->createForm(RubrosType::class,$rbr);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rbr);
            $em->flush();
            //return $this->redirectToRoute('index');
            return $this->redirect($this->generateUrl('rubros'));
        }
        
        return $this->render('MantenimientosBundle:Catalogos:AddRubro.html.twig',array("form"=> $form->createView()));
    }
    
    public function listacategoriasAction()
    {
        $datos=$this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Categorias')
                    ->findAll();
        return $this->render('MantenimientosBundle:Catalogos:ListaCategorias.html.twig',compact("datos"));
    }
}
