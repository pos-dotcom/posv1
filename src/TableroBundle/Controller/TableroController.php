<?php

namespace TableroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TableroController extends Controller
{
    public function indexAction()
    {
        return $this->render('TableroBundle:Default:index.html.twig');
        
    }
    
    public function tableroAction()
    {
        return $this->render('TableroBundle:Tablero:tablero.html.twig');
    }
}
