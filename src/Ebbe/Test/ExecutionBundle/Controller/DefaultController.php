<?php

namespace Ebbe\Test\ExecutionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeTestExecutionBundle:Default:index.html.twig', array('name' => $name));
    }
}
