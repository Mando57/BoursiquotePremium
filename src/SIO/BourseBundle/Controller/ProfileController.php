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

    public function connectionAction(Request $request)
    {
        {
            if($request->request->has('Connexion'))
            {
                $identifiant = $request->get('login');
                $pwd= $request->get('mdp');
                $pdo = models\PdoBourse::getPdoBourse();
                $try=$pdo->checkClient($identifiant, $pwd);
                if($try['logged']==true);
                {
                    $session= new Session;

                    $session->set('logged',true);
                    $session->set('userId',$try['id']);
                    $session->set('layout',1);
                }

            }



        }





        return $this->render ('BourseBundle:Profile:connection.html.twig');
    }


}

