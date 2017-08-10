<?php

namespace TaskPlannerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControllerControllerTest extends WebTestCase
{
    public function testVievtask()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/vievTask');
    }
    public function testAddtask()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/addTask');
    }
    public function testAdd()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/add');
    }
    public function testDelete()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/delete');
    }
    public function testEditformtask()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/editFormTask');
    }
    public function testUpdatetask()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/updateTask');
    }
}
