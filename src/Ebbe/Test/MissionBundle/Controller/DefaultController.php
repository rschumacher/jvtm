<?php

namespace Ebbe\Test\MissionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeTestMissionBundle:Default:index.html.twig', array('name' => $name));
    }
}
