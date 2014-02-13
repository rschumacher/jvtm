<?php

namespace Ebbe\SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeSubjectBundle:Default:index.html.twig', array('name' => $name));
    }
}
