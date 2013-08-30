<?php

namespace Raep\ConfigManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RaepConfigManagerBundle:Default:index.html.twig', array('name' => $name));
    }
}
