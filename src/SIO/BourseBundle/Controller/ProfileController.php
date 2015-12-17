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
                $data = $query->historicalQuote($favoris['ticker'], date('Y-m-d', strtotime("-30 days")) ,  date("Y-m-d"), 'daily')->get();
                $data2 = array();
                $i = 0;
                foreach ($data as $d) {
                    $data2[] = floatval($d['Close']);
                }

                $session->set($favoris['ticker'], $data2);
            }

            return $this->render('BourseBundle:Default:TableauDeBord.html.twig', array('favoris'=>$fav));
        }
        else
        {
            return $this->redirectToRoute('bourse_connexion');
        }
    }

    public function connectionAction(Request $request)
    {
        $session= new Session;
        if ($session->has('logged')) 
        {

            $url=$this->get('router')->generate('bourse_profile');
            return new RedirectResponse($url);


        }else{
            if($request->request->has('Connexion'))
                {
                    $identifiant = $request->get('login');
                    $pwd= $request->get('mdp');
                    $pdo = models\PdoBourses::getPdoBourse();
                    $try=$pdo->checkClient($identifiant, $pwd);

                    if($try['logged']==true)
                    {


                        $session->set('logged',true);
                        $session->set('userId',$try['id']);
                        $session->set('layout',1);
                        $url=$this->get('router')->generate('bourse_profile');
                        return new RedirectResponse($url);
                    }
                    else
                    {
                        $this->get('session')->getFlashBag()->add('notice', 'Mot de passe ou identifiant faux! ');
                        return $this->render ('BourseBundle:Profile:connection.html.twig');
                    }
            }
        }



        return $this->render ('BourseBundle:Profile:connection.html.twig');
    }

    public function DeconnectionAction(Request $request)
    {
        if($request->request->has('Bt-deco'))
        {
            $session= new Session();
            $session->clear();

        }


        return $this->redirectToRoute('bourse_connexion');
    }

    public function analyseAction()
    {
        $session = new Session();
        if($session->has('logged')) {
            return $this->render ('BourseBundle:Profile:analyse.html.twig');
        }else
        {
            return $this->redirectToRoute('bourse_connexion');
        }

    }

    public function validerinscriptionAction(Request $request)
    {
        if ($request->request->has('inscription'))
        {
            $aa[1] = $request->get('prenom');
            $aa[2] = $request->get('nom');
            $aa[3] = $request->get('identifiant');
            $aa[4] = $request->get('mdp');
            dump($aa);
            $pdo = models\PdoBourses::getPdoBourse();
            $try=$pdo->inscription($aa);
        }

        return $this->render('BourseBundle:Profile:connection.html.twig');
    }
    public function inscrireAction()
    {
        return $this->render ('BourseBundle:Profile:inscription.html.twig');
    }



}

