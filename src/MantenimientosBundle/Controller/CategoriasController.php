<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MantenimientosBundle\Entity\Categorias;
use MantenimientosBundle\Form\CategoriasType;

class CategoriasController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Categorias')
                    ->findAll();
            return $this->render('MantenimientosBundle:Catalogos:ListaCategorias.html.twig', compact("datos"));

            //  return $this->render('MantenimientosBundle:Catalogos:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function addAction() {
        $form=$this->createForm(CategoriasType::class);
        return $this->render('MantenimientosBundle:Catalogos:AddCategoria.html.twig',array("form"=>$form->createView()));
    }
    
    public function add2Action() {
        return $this->render('MantenimientosBundle:Catalogos:AddCategoria.html.twig');
    }

    public function listacategoriasAction() {
        $datos = $this->getDoctrine()
                ->getRepository('MantenimientosBundle:Categorias')
                ->findAll();
        return $this->render('MantenimientosBundle:Catalogos:ListaCategorias.html.twig', compact("datos"));
    }

}
