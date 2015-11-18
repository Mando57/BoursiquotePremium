<?php

namespace SIO\BourSIQuoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BourSIQuoteBundle:Default:index.html.twig', array('name' => $name));
    }
}
