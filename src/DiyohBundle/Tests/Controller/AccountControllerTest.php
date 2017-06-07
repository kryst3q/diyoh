<?php

namespace DiyohBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccountControllerTest extends WebTestCase
{
    public function testShowmessagesmenu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/messages');
    }

    public function testNewmessage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/messages/new');
    }

    public function testGetreceivedmessages()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/messages/received');
    }

    public function testGetsentmessages()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/messages/sent');
    }

    public function testGetallusercomments()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/comments');
    }

    public function testGetalluserdiscussions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/discussions');
    }

    public function testGetalluservoices()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/voices');
    }

    public function testGetalluserprojects()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projects');
    }

    public function testGetalluserfavouriteprojects()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/favourite_projects');
    }

}
