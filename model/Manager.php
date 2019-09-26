<?php

namespace Leyzou\Portfolio\Model;

class Manager
{
    private $dns = 'mysql';
    private $host = 'localhost';
    private $db = 'portfolio';
    private $user = 'root';
    private $password = '';

    protected function dbConnect()
    {
        $db = new \PDO($this->dns . ':host=' . $this->host . ';dbname=' . $this->db . ';charset=utf8', $this->user, $this->password);
        return $db;
    }
}