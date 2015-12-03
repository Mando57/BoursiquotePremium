<?php

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

		include('PHPGraphLib.php');
        //$graph=models\PHPGraphLib::PHPGraphLib(650,200);
        //$graph = $this->container->get('la_fleur_symfony.panier');
        $graph= new PHPGraphLib($tailleL,$tailleH);

        $data = array("1" => .0032, "2" => .0028, "3" => .0021, "4" => .0033,
            "5" => .0034, "6" => .0031, "7" => .0036, "8" => .0027, "9" => .0024,
            "10" => .0021, "11" => .0026, "12" => .0024, "13" => .0036,
            "14" => .0028, "15" => .0025);
        $graph->addData($data);
        $graph->setTitle($title);
        $graph->setBars(false);
        $graph->setLine(true);
        $graph->setDataPoints(true);
        $graph->setDataPointColor('maroon');
        $graph->setDataValues(false);
        $graph->setDataValueColor('maroon');
        $graph->setGoalLineColor('red');
		$graph->setRange(0.0035,0.0020);
        $graph->createGraph();
?>