<?php

namespace Leyzou\Portfolio\Model;

class Manager
{

    private $host = 'localhost';
    private $db = 'test';
    private $user = 'root';
    private $password = '';

    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $user, $password);
        return $db;
    }
}