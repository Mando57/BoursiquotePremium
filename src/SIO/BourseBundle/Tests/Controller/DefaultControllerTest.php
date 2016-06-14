<?php

namespace SIO\BourseBundle\Tests\Controller;


use models;


class DefaultControllerTest extends PHPUnit_Framework_TestCase
{
   /* public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Fabien');

        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }*/

    public function testLogin()
    {
        $pdo=models\PdoBourses::getPdoBourse();
        $this->assertEquals($pdo->checkLogin('toto','toto'),true);

    }
}
