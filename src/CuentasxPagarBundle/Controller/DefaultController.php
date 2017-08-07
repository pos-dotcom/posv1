<?php

namespace CuentasxPagarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CuentasxPagarBundle:Default:index.html.twig');
    }
}
