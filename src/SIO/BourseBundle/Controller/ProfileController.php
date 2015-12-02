<?php

namespace SIO\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use models;
use Symfony\Component\HttpFoundation\Session\Session;

class ProfileController extends Controller
{
    public function indexAction()
    {
        return $this->render('BourseBundle:Profile:index.html.twig');
    }
}
