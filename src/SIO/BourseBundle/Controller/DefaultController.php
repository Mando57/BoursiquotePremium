<?php

namespace SIO\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BourseBundle:Default:index.html.twig', array('name' => $name));
    }
    public function accueilAction()
    {
        return $this->render('BourseBundle:Default:accueil.html.twig');
    }
    public function TDBAction()
    {
        return $this->render('BourseBundle:Default:TableauDeBord.html.twig');
    }

}
