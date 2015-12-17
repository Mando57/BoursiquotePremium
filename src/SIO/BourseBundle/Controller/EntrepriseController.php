<?php
namespace SIO\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use models;
use Symfony\Component\HttpFoundation\Session\Session;
use DirkOlbrich\YahooFinanceQuery\YahooFinanceQuery;

class EntrepriseController extends Controller
{
    public function voirEntrepriseAction($ticker)
    {
        $session = new Session();
        if($session->has('logged')) {
            $pdo=models\PdoBourses::getPdoBourse();
            $entreprise=$pdo->getEntrepriseByTicker($ticker);

            $query = new YahooFinanceQuery;


            //Attribution des variables pour le graph
            $data = $query->historicalQuote($entreprise[0]['ticker'], date('Y-m-d', strtotime("-30 days")) ,  date("Y-m-d"), 'daily')->get();
            $data2 = array();

            foreach ($data as $d) {
                $data2[] = floatval($d['Close']);
            }

            $session->set($entreprise[0]['ticker'], $data2);

            //attribution des variable pour les info dans la page
            $data = $query->historicalQuote($entreprise[0]['ticker'], '2015-12-15', '2015-12-16', 'daily')->get();

            $test=array('test'=>'valdetst');
            $entreprise[0]['date']=$data[0]['Date'];
            $entreprise[0]['open']=$data[0]['Open'];
            $entreprise[0]['high']=$data[0]['High'];
            $entreprise[0]['low']=$data[0]['Low'];
            $entreprise[0]['close']=$data[0]['Close'];
            $entreprise[0]['volume']=$data[0]['Volume'];


            return $this->render('BourseBundle:Entreprise:focusEntreprise.html.twig',array('entreprise'=>$entreprise[0]));
        }
        else
        {
            return $this->redirectToRoute('bourse_connexion');
        }
    }
    public function rechercherAction(Request $REQUEST)
    {
    	$pdo=models\PdoBourses::getPdoBourse();
    	$entreprises=$pdo->rechercherEntreprise($REQUEST->get('recherche'));


    	return $this->render ('BourseBundle:Entreprise:recherche.html.twig', array('entreprises'=>$entreprises));
    }

    public function secteursAction(){
        $pdo=models\PdoBourses::getPdoBourse();

        $lesActions = $pdo->getAllActions();
        $query = new YahooFinanceQuery();
        foreach($lesActions as $uneAction){
            $code = $uneAction['ticker'];
            $data = $query->stockInfo($code)->get();
            if($data != null) {
                $leSecteur = $data['Sector'];
                $pdo->affecterSecteur($code, $leSecteur);
            }
            //break;
        }
        return $this->render('BourseBundle:Entreprise:focusEntreprise.html.twig');
    }

}