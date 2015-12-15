<?php

namespace SIO\BourseBundle\Controller;

use models;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use DirkOlbrich\YahooFinanceQuery\YahooFinanceQuery;

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
            return $this->render ('BourseBundle:Default:TableauDeBord.html.twig', array('fav'=>$fav));
        }
        else
        {
            return $this->redirectToRoute('bourse_connexion');
        }


        
    }

}
