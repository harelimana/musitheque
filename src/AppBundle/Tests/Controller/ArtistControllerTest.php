<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArtistControllerTest extends WebTestCase
{
    public function testAddartist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addArtist');
    }

    public function testFindartist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/findArtist');
    }

    public function testRetrieveallartist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveAllArtist');
    }

    public function testDeleteartist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteArtist');
    }

}
