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
    public function voirEntrepriseAction($ticker,Request $request)
    {
        $session = new Session();
        $pdo=models\PdoBourses::getPdoBourse();
        if($session->has('logged')) {

            if($request->request->has('quant'))
            {
                $pdo->addOpe($request->get('quant'),$request->get('prixu'),$request->get('pf'),$request->get('ident'));
            }





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
            dump($data);
            $param = explode(' ','LastTradePriceOnly x c1');
            $ticker2 = explode(' ', $entreprise[0]['ticker']);
            $res = $query->quote($ticker2, $param)->get();



            $test=array('test'=>'valdetst');
            $entreprise[0]['date']=$data[0]['Date'];
            $entreprise[0]['open']=$data[0]['Open'];
            $entreprise[0]['high']=$data[0]['High'];
            $entreprise[0]['low']=$data[0]['Low'];
            $entreprise[0]['close']=$data[0]['Close'];
            $entreprise[0]['volume']=$data[0]['Volume'];
            $entreprise[0]['tcp']=$res[0]['LastTradePriceOnly'];
            dump($entreprise);

            $pf=$pdo->getPF();
            dump($pf);


            return $this->render('BourseBundle:Entreprise:focusEntreprise.html.twig',array('entreprise'=>$entreprise[0],'pf'=>$pf));
        }
        else
        {
            return $this->redirectToRoute('bourse_connexion');
        }
    }
    public function rechercherAction(Request $REQUEST)
    {
        $session = new Session();
        if($session->has('logged')) {
            $pdo=models\PdoBourses::getPdoBourse();
            $entreprises=$pdo->rechercherEntreprise($REQUEST->get('recherche'));
            dump($entreprises);
            if(!empty($entreprises[1]))
            {
                for($i=0;$i<count($entreprises[0]);$i++)
                {
                    for($z=0;$z<count($entreprises[1]);$z++)
                    {
                        if($entreprises[1][$z]['ticker']==$entreprises[0][$i]['ticker'])
                        {
                            $entreprises[0][$z]['favoris']=true;

                        }else{
                            $entreprises[0][$z]['favoris']=false;

                        }
                    }
                }
            }

            return $this->render ('BourseBundle:Entreprise:recherche.html.twig', array('entreprises'=>$entreprises[0]));
        }
        else
        {
            return $this->redirectToRoute('bourse_connexion');
        }
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