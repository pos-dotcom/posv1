<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogosController extends Controller
{
    public function indexAction()
    {
        return $this->render('MantenimientosBundle:Catalogos:index.html.twig');
    }
    
    public function listacategoriasAction()
    {
        $datos=$this->getDoctrine()
                    ->getRepository('MantenimientosBundle:Categorias')
                    ->findAll();
        return $this->render('MantenimientosBundle:Catalogos:ListaCategorias.html.twig',compact("datos"));
    }
}
