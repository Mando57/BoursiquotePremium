<?php
/**
 * Classe d'accès aux données.
 * Utilise les services de la classe PDO
 * pour l'application lafleur
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Patrice Grand
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
namespace models;

use Symfony\Component\HttpFoundation\Session\Session;

class PdoBourses
{
    private static $serveur='mysql:host=172.18.204.105';
    private static $bdd='dbname=BSIQ';
    private static $user='root' ;
    private static $mdp='yama2211' ;
    private static $monPdo;
    private static $monPdoBourse = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        PdoBourses::$monPdo = new \PDO(PdoBourses::$serveur.';'.PdoBourses::$bdd, PdoBourses::$user, PdoBourses::$mdp);
        PdoBourses::$monPdo->query("SET CHARACTER SET utf8");
    }
    public function _destruct(){
        PdoBourses::$monPdo = null;
    }
    /**
     * Fonction statique qui crée l'unique instance de la classe
     *
     * Appel : $instancePdoBourse = PdoBourse::getPdoBourse();
     * @return l'unique objet de la classe PdoBourse
     */
    public  static function getPdoBourse()
    {
        if(PdoBourses::$monPdoBourse == null)
        {
            PdoBourses::$monPdoBourse= new PdoBourses();
        }
        return PdoBourses::$monPdoBourse;
    }

    public function checkLogin($identifiant,$pwd)
    {
        $req="select count(*) as nbr from administrateur where nom='".$identifiant."' and mdp='".$pwd."'";
        $res = PdoBourses::$monPdo->query($req);
        $logged=$res->fetch();
        if($logged['nbr']==1)
        {
            $LoginConfirmation=true;
        }else
        {
            $LoginConfirmation=false;
        }
        return $LoginConfirmation;
    }


    /*************    Methode du controle **********/



    //creation de compte client
    public function createClient($login,$pwd)
    {
        $insert=("insert into client(login,mdp) values ('$login','$pwd') ");
        $res=PdoBourses::$monPdo->exec($insert);

        return $res;
    }

    /// login du client
    public function checkClient($identifiant,$pwd)
    {

        $req="select id,count(*) as nbr from client where identifiant='".$identifiant."' and pwd='".$pwd."'";
        $res = PdoBourses::$monPdo->query($req);
        $logged=$res->fetch();
        dump($req);
        if($logged['nbr']==1)
        {
            $LoginConfirmation['logged']=true;
            $LoginConfirmation['id']=$logged['id'];
        }else
        {
            $LoginConfirmation=false;
        }
        return $LoginConfirmation;

    }

    public function getFav()
    {
        $session=new Session();
        //$session->start();
        $req='select company,ticker from favoris as f inner join action as a on a.idaction=f.idaction where f.id='.$session->get('userId');

        $res = PdoBourses::$monPdo->query($req);
        return $res->fetchAll();
    }

    public function getEntrepriseByTicker($tick)
    {
        $req="select * from action where ticker=$tick";
        $res=PdoBourses::$monPdo->query($req);
        $res->fetchAll();
        return $res;
    }

    public function rechercherEntreprise($rech)
    {
        $req="select * from action where company like '".$rech."'";
        $res=PdoBourses::$monPdo->query($req);
        $res->fetchAll();
        return $res;
    }



}
?>