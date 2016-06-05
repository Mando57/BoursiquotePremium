<?php

namespace SIO\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use models;
use Symfony\Component\HttpFoundation\Session\Session;
use DirkOlbrich\YahooFinanceQuery\YahooFinanceQuery;

class MailController extends Controller
{
    public function sendMailAction()
    {

        ini_set('smtp_server', 'smtp.sfr.fr');
        ini_set('SMTP', 'smtp.sfr.fr');
        ini_set('smtp_port', '25');
        ini_set('auth_username', 'admi2n');
        ini_set('auth_password', 'cri9cententoutreweak');
        ini_set('sendmail_from','boursiquote@gmail.com');
        $pdo = models\PdoBourses::getPdoBourse();

        $query=new YahooFinanceQuery;
        $param = explode(' ','LastTradePriceOnly x c1');



        $notifs=$pdo->getAllNotif();
        dump($notifs);
        foreach($notifs as $notif)
        {

            $ticker = explode(' ', $notif['ticker']);
            $res = $query->quote($ticker, $param)->get();
            dump($res[0]['LastTradePriceOnly']);
            if ($res[0]['LastTradePriceOnly'] != 'N/A') {
                if ($res[0]['LastTradePriceOnly'] < $notif['seuil']) {
                   $message = "Les parts de l'entreprise " . $notif['company'] . " a depassé le seuil de :" . $notif['seuil'] . " et est a " . $res[0]['LastTradePriceOnly'];

                    // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
                    $message = wordwrap($message, 70, "\r\n");


                    mail('themando57@gmail.com', 'Alerte BourSiQuote', $message);
                    $pdo->updateNotif($notif['id']);


                }
            }
        }

        return $this->render('BourseBundle:Mail:mail.html.twig');
    }


}

