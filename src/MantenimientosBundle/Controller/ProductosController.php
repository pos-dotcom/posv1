<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MantenimientosBundle\Entity\Productos;
use MantenimientosBundle\Form\ProductosType;

class ProductosController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Productos')
                    ->findAll();
            return $this->render('MantenimientosBundle:Catalogos:ListaProductos.html.twig', compact("datos"));

            //  return $this->render('MantenimientosBundle:Catalogos:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    
    public function addAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $prod = new Productos();
            $form = $this->createForm(ProductosType::class, $prod);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($prod);
                $em->flush();
                //return $this->redirectToRoute('index');
                return $this->redirect($this->generateUrl('productos'));
            }

            return $this->render('MantenimientosBundle:Catalogos:AddProducto.html.twig', array("form" => $form->createView()));
        } else {

            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function editAction($codigoProducto, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
           
            $pro = new Productos();
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Productos')
                    ->find($codigoProducto);
            if (!$datos) {
                throw $this->createNotFoundException('No existe agencia con valor ' . $codigoProducto);
            }
            $form = $this->createForm(ProductosType::class, $datos);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                //$em->persist($agn);
                $em->flush();
                $this->get('session')->getFlashBag()->add('Mensaje', 'Se ha modificado producto exitosamente');
                return $this->redirect($this->generateUrl('productos'));
            }
            return $this->render('MantenimientosBundle:Catalogos:EditProducto.html.twig', array("form" => $form->createView()));
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
