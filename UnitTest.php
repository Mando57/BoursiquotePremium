<?php
require_once('src/models/PdoBourses.php');



class UnitTest extends PHPUnit_Framework_TestCase
{

    public function testLogin()
    {
        $pdo=models\PdoBourses::getPdoBourse();
        $test=array('logged' => 1 ,'id'=>2);
        $this->assertEquals($pdo->checkClient('toto','toto'),$test);

    }

}