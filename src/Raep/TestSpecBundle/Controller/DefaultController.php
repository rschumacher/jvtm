<?php

namespace Raep\TestSpecBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RaepTestSpecBundle:Default:index.html.twig', array('name' => $name));
    }
}
