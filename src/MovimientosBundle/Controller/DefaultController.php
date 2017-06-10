<?php

namespace MovimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MovimientosBundle:Default:index.html.twig');
    }
}
