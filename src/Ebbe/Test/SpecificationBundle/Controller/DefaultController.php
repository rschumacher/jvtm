<?php

namespace Ebbe\Test\SpecificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeTestSpecificationBundle:Default:index.html.twig', array('name' => $name));
    }
}
