<?php

namespace Ebbe\Test\EvaluationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeTestEvaluationBundle:Default:index.html.twig', array('name' => $name));
    }
}
