<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MantenimientosBundle\Entity\Agencia;
use MantenimientosBundle\Form\AgenciaType;

class AgenciasController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Agencia')
                    ->findAll();

            // return $this->render('MantenimientosBundle:Catalogos::ListaCategorias.html.twig',compact("datos"));
            return $this->render('MantenimientosBundle:Catalogos:ListaAgencias.html.twig', compact("datos"));

            //   return $this->render('MantenimientosBundle:Catalogos:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function addAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $agn = new Agencia();
            $form = $this->createForm(AgenciaType::class, $agn);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($agn);
                $em->flush();
                $this->get('session')->getFlashBag()->add('Mensaje', 'Se ha agregado agencia exitosamente');

                return $this->redirect($this->generateUrl('agencias'));
            }

            return $this->render('MantenimientosBundle:Catalogos:AddAgencia.html.twig', array("form" => $form->createView()));
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function editAction($codigoAgencia, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $agn = new Agencia();
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Agencia')
                    ->find($codigoAgencia);
            if (!$datos) {
                throw $this->createNotFoundException('No existe agencia con valor ' . $codigoAgencia);
            }
            $form = $this->createForm(AgenciaType::class, $datos);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                //$em->persist($agn);
                $em->flush();
                $this->get('session')->getFlashBag()->add('Mensaje', 'Se ha modificado agencia exitosamente');
                return $this->redirect($this->generateUrl('agencias'));
            }
            return $this->render('MantenimientosBundle:Catalogos:EditAgencia.html.twig', array("form" => $form->createView()));
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
