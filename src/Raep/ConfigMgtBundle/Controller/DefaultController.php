<?php

namespace Raep\ConfigMgtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RaepConfigMgtBundle:Default:index.html.twig', array('name' => $name));
    }
}
