<?php

namespace TableroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TableroBundle:Default:index.html.twig');
    }
}
