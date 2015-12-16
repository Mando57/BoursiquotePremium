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
        $pdo=models\PdoBourses::getPdoBourse();
        $entreprise=$pdo->getEntrepriseByTicker($ticker);
    }

}