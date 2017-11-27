<?php

namespace VentasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VentasController extends Controller
{
    public function indexAction()
    {
        return $this->render('VentasBundle:Default:index.html.twig');
    }
}
