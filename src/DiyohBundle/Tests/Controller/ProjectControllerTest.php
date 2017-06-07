<?php

namespace DiyohBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectControllerTest extends WebTestCase
{
    public function testShowmaincategories()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories');
    }

    public function testShowtools()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tools');
    }

    public function testShowmaterials()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/materials');
    }

    public function testShowtags()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tags');
    }

    public function testShowprojects()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projects');
    }

    public function testShowproject()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/project/{id}');
    }

}
