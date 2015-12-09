<?php
session_start();
if(isset($_GET['t']))
{
    $title=$_GET['t'];
}else{
    $title='default title';
}

if(isset($_GET['id']))
{
    $ticker=$_GET['id'];

}else{
    //exit;
}

if(isset($_GET['tailleL']))
{
   $tailleL=$_GET['tailleL'];
}else{
    $tailleL=200;
}

if(isset($_GET['tailleH']))
{
    $tailleH=$_GET['tailleH'];

}else{
    $tailleH=200;
}

/*use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use DirkOlbrich\YahooFinanceQuery\YahooFinanceQuery;
        $querry= new YahooFinanceQuery;*/
		//$data = $query->yql()->historicalQuote('basf', '09/11/2015', '09/12/2015', 'daily')->get();

		include('PHPGraphLib.php');
        //$graph=models\PHPGraphLib::PHPGraphLib(650,200);
        //$graph = $this->container->get('la_fleur_symfony.panier');
        $graph= new PHPGraphLib($tailleL,$tailleH);
	if(!isset($_SESSION['test']))
	{
        $data = array("1" => .0032, "2" => .0028);
}else{
		$data=$_SESSION['test'];
}
		$graph->addData($data);
        $graph->setTitle($title);
        $graph->setBars(false);
        $graph->setLine(true);
        $graph->setDataPoints(true);
        $graph->setDataPointColor('maroon');
        $graph->setDataValues(false);
        $graph->setDataValueColor('maroon');
        $graph->setGoalLineColor('red');
		$graph->setRange(70,80);
        $graph->createGraph();
?>