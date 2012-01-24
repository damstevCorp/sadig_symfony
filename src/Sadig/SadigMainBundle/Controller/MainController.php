<?php

namespace Sadig\SadigMainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SadigSadigMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
