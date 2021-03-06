<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MantenimientosBundle\Entity\Proveedor;
use MantenimientosBundle\Form\ProveedorType;

class ProveedoresController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Proveedor')
                    ->findAll();

            return $this->render('MantenimientosBundle:Catalogos:ListaProveedores.html.twig', compact("datos"));
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function addAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $pro = new Proveedor();
            $form = $this->createForm(ProveedorType::class, $pro);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($pro);
                $em->flush();
                //return $this->redirectToRoute('index');
                return $this->redirect($this->generateUrl('proveedores'));
            }

            return $this->render('MantenimientosBundle:Catalogos:AddProveedor.html.twig', array("form" => $form->createView()));
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function editAction($codigoProveedor, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $prov = new Proveedor();
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Proveedor')
                    ->find($codigoProveedor);
            if (!$datos) {
                throw $this->createNotFoundException('No existe agencia con valor ' . $codigoProveedor);
            }
            $form = $this->createForm(ProveedorType::class, $datos);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                //$em->persist($agn);
                $em->flush();
                $this->get('session')->getFlashBag()->add('Mensaje', 'Se ha modificado proveedor exitosamente');
                return $this->redirect($this->generateUrl('proveedores'));
            }
            return $this->render('MantenimientosBundle:Catalogos:EditProveedor.html.twig', array("form" => $form->createView()));
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
