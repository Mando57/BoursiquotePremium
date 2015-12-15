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

class PdoBourse
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
        PdoBourse::$monPdo = new \PDO(PdoBourse::$serveur.';'.PdoBourse::$bdd, PdoBourse::$user, PdoBourse::$mdp);
        PdoBourse::$monPdo->query("SET CHARACTER SET utf8");
    }
    public function _destruct(){
        PdoBourse::$monPdo = null;
    }
    /**
     * Fonction statique qui crée l'unique instance de la classe
     *
     * Appel : $instancePdoBourse = PdoBourse::getPdoBourse();
     * @return l'unique objet de la classe PdoBourse
     */
    public  static function getPdoBourse()
    {
        if(PdoBourse::$monPdoBourse == null)
        {
            PdoBourse::$monPdoBourse= new PdoBourse();
        }
        return PdoBourse::$monPdoBourse;
    }

    public function checkLogin($identifiant,$pwd)
    {
        $req="select count(*) as nbr from administrateur where nom='".$identifiant."' and mdp='".$pwd."'";
        $res = PdoBourse::$monPdo->query($req);
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
        $res=PdoBourse::$monPdo->exec($insert);
        var_dump($insert);
        return $res;
    }

    /// login du client
    public function checkClient($identifiant,$pwd)
    {

        $req="select id,count(*) as nbr from client where identifiant='".$identifiant."' and pwd='".$pwd."'";
        $res = PdoBourse::$monPdo->query($req);
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




}
?>