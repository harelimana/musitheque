<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    public function testAddcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addCategorie');
    }

    public function testFindcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/findCategorie');
    }

    public function testRetrieveallcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveAllCategorie');
    }

}
