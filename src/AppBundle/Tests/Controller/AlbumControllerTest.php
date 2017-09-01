<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AlbumControllerTest extends WebTestCase
{
    public function testAddalbum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addAlbum');
    }

    public function testFindalbum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/findAlbum');
    }

    public function testRetrieveallalbum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/retrieveAllAlbum');
    }

    public function testDeletealbum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteAlbum');
    }

}
