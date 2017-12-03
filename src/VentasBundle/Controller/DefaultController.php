<?php

namespace VentasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VentasBundle:Default:VentasLista.html.twig');
    }
}
