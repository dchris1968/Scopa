<?php

namespace CapstoneProject\ScopaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CapstoneProjectScopaBundle:Default:index.html.twig', array('name' => $name));
    }
}
