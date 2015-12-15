<?php
session_start();

//echo var_dump($_SESSION);

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


if(isset($_GET['ent']))
{
    $ent=$_GET['ent'];
}

		include('PHPGraphLib.php');
        include('PdoBourse.php');
        $graph= new PHPGraphLib($tailleL,$tailleH);
	if(!isset($_SESSION['_sf2_attributes']['val'][$ent]))
	{
        $data = array("1" => .0032, "2" => .0028);
    }else{
            $data=$_SESSION['_sf2_attributes']['val'][$ent];
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