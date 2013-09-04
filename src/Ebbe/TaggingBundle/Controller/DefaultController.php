<?php

namespace Ebbe\TaggingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeTaggingBundle:Default:index.html.twig', array('name' => $name));
    }
}
