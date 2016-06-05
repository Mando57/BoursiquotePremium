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
    private static $serveur='mysql:host=127.0.0.1';
    private static $bdd='dbname=BSIQ';
    private static $user='root' ;
    private static $mdp='' ;
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
     * @return l'unique objet de l<a classe PdoBourse
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
        $req='select * from favoris as f inner join action as a on a.idaction=f.idaction where f.id='.$session->get('userId');

        $res = PdoBourses::$monPdo->query($req);
        return $res->fetchAll();
    }

    public function getEntrepriseByTicker($tick)
    {
        $req="select * from action where ticker='$tick'";
        $res=PdoBourses::$monPdo->query($req);
        $res=$res->fetchAll();
        return $res;
    }

    public function rechercherEntreprise($rech)
    {
        $req="select * from action where company like '%".$rech."%'";
        $res=PdoBourses::$monPdo->query($req);
        $res=$res->fetchAll();
        $req2="select * from action inner join favoris on action.idaction=favoris.idaction where company like '%$rech%'";
        $res2=PdoBourses::$monPdo->query($req2);
        $res2=$res2->fetchAll();
        $tab=array();
        $tab[]=$res;
        $tab[]=$res2;
        return $tab;
    }

    public function getAllActions()
    {
        $req="select * from action where pays like '%FRANCE%' and ticker not in (select codetitre from secteur)";
        $res=PdoBourses::$monPdo->query($req);
        $resu = $res->fetchAll();
        return $resu;
    }

    public function affecterSecteur($code, $secteur){
        $insert=("insert into secteur(codeTitre, secteurLib) values ('$code','$secteur') ");
        $res=PdoBourses::$monPdo->exec($insert);
    }

    public function isInList($code){
        $req="select count(*) as nb from secteur where codeTitre ='$code'";
        $res=PdoBourses::$monPdo->query($req);
        $resu = $res->fetch();
        return $resu['nb'];
    }
    public function setFavoris($ticker)
    {
        $session=new Session();
        $req="select count(*) as nb from favoris inner join action on action.idaction=favoris.idaction where id=".$session->get('userId')." and ticker like '$ticker'";
        $res=PdoBourses::$monPdo->query($req);
        $res=$res->fetch();

        $req2="select *  from action  where ticker like '$ticker'";
        $res2=PdoBourses::$monPdo->query($req2);
        $res2=$res2->fetch();

        if(isset($res2['idaction'])) {
            if ($res['nb'] == 0) {

                $insert = 'insert into favoris values(' . $session->get('userId') . ',' . $res2['idaction'].')';
                PdoBourses::$monPdo->exec($insert);



            } else {
                $insert = "delete from favoris where id=" . $session->get('userId') . " and idaction=" . $res2['idaction'];
                PdoBourses::$monPdo->exec($insert);


            }
        }
    }

    public function inscription($prenom,$nom,$iden,$mdp)
    {
        $req="insert into client values(null,'".$prenom."','".$nom."','".$iden."','".$mdp."')";
        $res=PdoBourses::$monPdo->exec($req);


    }

    public function remooveFav($ident)
    {
        $session=new Session();
        $req="delete from favoris where id=". $session->get('userId')." and idaction=".$ident;
        $res=PdoBourses::$monPdo->exec($req);



    }


    public function getPF()
    {
        $session=new Session();
        $req='select * from Portefeuille where idc='.$session->get('userId');

        $res=PdoBourses::$monPdo->query($req);
        return $res->fetchAll();
    }

    public function getOpeById($idp)
    {

        $req='select operation.*,ticker,company,pays from operation inner join action on operation.ida=action.idaction where idp='.$idp.' order by ida';

        $res=PdoBourses::$monPdo->query($req);
        $return=array();
        $return[1]=$res->fetchAll();

        $req='select * from Portefeuille where id='.$idp;
        $res=PdoBourses::$monPdo->query($req);
        $return[0]=$res->fetch();


        return $return;
    }

    public function addOpe($quant,$prixu,$pf,$ident)
    {
        $req="INSERT INTO operation (ida, idp, frais, prix, quantite, date, sens) VALUES ($ident,$pf,2,$prixu,$quant,now(),'-')";
        $res=PdoBourses::$monPdo->exec($req);
        var_dump($req);

    }

    public function getAllNotif()
    {
        $req="select notification.*,ticker,company,identifiant from notification inner join action on notification.ida=action.idaction inner join client on notification.idc=client.id where envoie=0";
        $res=PdoBourses::$monPdo->query($req);
        dump($req);
        return $res->fetchAll();
    }

    public function updateNotif($id)
    {
        $req="update notification set envoie=1 where id=$id";
        $res=PdoBourses::$monPdo->exec($req);
    }





}
?>