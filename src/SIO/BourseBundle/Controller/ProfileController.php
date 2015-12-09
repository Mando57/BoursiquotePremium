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
        //include('PHPGraphLib.php');
        //$graph=models\PHPGraphLib::PHPGraphLib(650,200);
        /*$graph = $this->container->get('la_fleur_symfony.panier');
        $graph->PHPGraphLib(650,200);

        $data = array("1" => .0032, "2" => .0028, "3" => .0021, "4" => .0033,
            "5" => .0034, "6" => .0031, "7" => .0036, "8" => .0027, "9" => .0024,
            "10" => .0021, "11" => .0026, "12" => .0024, "13" => .0036,
            "14" => .0028, "15" => .0025);
        $graph->addData($data);
        $graph->setTitle('PPM Per Container');
        $graph->setBars(false);
        $graph->setLine(true);
        $graph->setDataPoints(true);
        $graph->setDataPointColor('maroon');
        $graph->setDataValues(true);
        $graph->setDataValueColor('maroon');
        $graph->setGoalLine(.0025);
        $graph->setGoalLineColor('red');
        $graph->createGraph();*/
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
                    $url=$this->get('router')->generate('bourse_profile');
                    return new RedirectResponse($url);
                }


            }



        }





        return $this->render ('BourseBundle:Profile.html.twig');
    }


}

