<?php

namespace VentasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VentasController extends Controller
{
    public function indexAction()
    {
        return $this->render('VentasBundle:Default:VentasLista.html.twig');
    }
    
    public function addventaAction()
    {
        
        
        
    }
}
