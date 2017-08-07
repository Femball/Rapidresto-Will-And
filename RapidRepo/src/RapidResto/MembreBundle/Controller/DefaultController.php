<?php

namespace RapidResto\MembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RapidRestoMembreBundle:Default:index.html.twig');
    }
}
