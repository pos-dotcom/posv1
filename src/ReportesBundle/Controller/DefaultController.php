<?php

namespace ReportesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReportesBundle:Default:index.html.twig');
    }
}
