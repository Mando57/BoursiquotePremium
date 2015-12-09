<?php

namespace SIO\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use models;
use Symfony\Component\HttpFoundation\Session\Session;
use DirkOlbrich\YahooFinanceQuery\YahooFinanceQuery;

class ProfileController extends Controller
{
    public function indexAction()
    {
        $query= new YahooFinanceQuery;
        $data = $query->historicalQuote('bas.de', '2015-11-09',  '2015-12-09', 'daily')->get();
        //dump($data);
        $data2=array();
        $i=0;
        foreach($data as $d)
        {
            $data2[]=floatval($d['Close']);
        }
        $_SESSION['test']=$data2;
        dump($data2);
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
                
                if($try['logged']==true)
                {
                    $session= new Session;

                    $session->set('logged',true);
                    $session->set('userId',$try['id']);
                    $session->set('layout',1);
                    $url=$this->get('router')->generate('bourse_profile');
                    return new RedirectResponse($url);
                }
                else
                {
                    $this->get('session')->getFlashBag()->add('notice', 'Erreur identifiants! ');
                    return $this->render ('BourseBundle:Profile:connection.html.twig');
                }


            }



        }





        return $this->render ('BourseBundle:Profile:connection.html.twig');
    }


}

