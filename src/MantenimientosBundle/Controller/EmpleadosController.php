<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MantenimientosBundle\Entity\Empleados;
use MantenimientosBundle\Form\EmpleadosType;

class EmpleadosController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Empleados')
                    ->findAll();

            return $this->render('MantenimientosBundle:Catalogos:ListaEmpleados.html.twig', compact("datos"));
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function addAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $empl = new Empleados();
            $form = $this->createForm(EmpleadosType::class, $empl);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($empl);
                $em->flush();
                //return $this->redirectToRoute('index');
                return $this->redirect($this->generateUrl('empleados'));
            }

            return $this->render('MantenimientosBundle:Catalogos:AddEmpleado.html.twig', array("form" => $form->createView()));
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
