<?php

namespace SeguridadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SeguridadController extends Controller
{
    public function indexAction()
    {
        return $this->render('SeguridadBundle:Default:index.html.twig');
    }
}
