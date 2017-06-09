<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MantenimientosBundle\Entity\Rubros;
use MantenimientosBundle\Form\RubrosType;

class RubrosController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Rubros')
                    ->findAll();

            return $this->render('MantenimientosBundle:Catalogos:ListaRubros.html.twig', compact("datos"));
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function addAction(Request $request) {

        $session = $request->getSession();
        if ($session->has("id")) {

            $rbr = new Rubros();
            $form = $this->createForm(RubrosType::class, $rbr);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($rbr);
                $em->flush();
                //return $this->redirectToRoute('index');
                return $this->redirect($this->generateUrl('rubros'));
            }

            return $this->render('MantenimientosBundle:Catalogos:AddRubro.html.twig', array("form" => $form->createView()));
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function editAction($codigoRubro, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $rbr = new Rubros();
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Rubros')
                    ->find($codigoRubro);
            if (!$datos) {
                throw $this->createNotFoundException('No existe agencia con valor ' . $codigoRubro);
            }
            $form = $this->createForm(RubrosType::class, $datos);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                //$em->persist($agn);
                $em->flush();
                $this->get('session')->getFlashBag()->add('Mensaje', 'Se ha modificado rubro exitosamente');
                return $this->redirect($this->generateUrl('rubros'));
            }
            return $this->render('MantenimientosBundle:Catalogos:EditRubro.html.twig', array("form" => $form->createView()));
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function listacategoriasAction() {
        $datos = $this->getDoctrine()
                ->getRepository('MantenimientosBundle:Categorias')
                ->findAll();
        return $this->render('MantenimientosBundle:Catalogos:ListaCategorias.html.twig', compact("datos"));
    }

}
