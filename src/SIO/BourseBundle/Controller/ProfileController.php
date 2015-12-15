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
        $session = new Session();
        if($session->has('logged')) {
            $pdo = models\PdoBourses::getPdoBourse();
            $fav=$pdo->getFav();

            $query = new YahooFinanceQuery;
            foreach($fav as $favoris) {
                $data = $query->historicalQuote($favoris['ticker'], '2015-11-09', '2015-12-09', 'daily')->get();
                dump($data);
                dump($favoris['ticker']);
                $data2 = array();
                $i = 0;
                foreach ($data as $d) {
                    $data2[] = floatval($d['Close']);
                }

                $session->set($favoris['company'], $data2);
            }
            dump($fav);
            return $this->render('BourseBundle:Profile:index.html.twig', array('fav'=>$fav));
        }else{
            return $this->redirectToRoute('bourse_connexion');
        }
    }

    public function connectionAction(Request $request)
    {
        {
            if($request->request->has('Connexion'))
            {
                $identifiant = $request->get('login');
                $pwd= $request->get('mdp');
                $pdo = models\PdoBourses::getPdoBourse();
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

