<?php

namespace Ebbe\Test\TopicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeTestTopicBundle:Default:index.html.twig', array('name' => $name));
    }
}
