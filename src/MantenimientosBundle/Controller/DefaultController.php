<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MantenimientosBundle:Default:index.html.twig');
    }
}
