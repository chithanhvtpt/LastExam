<?php

class DB
{
    private $sdn;
    private $username;
    private $password;
    public function __construct()
    {
        $this->sdn = "mysql:host=localhost;dbname=market;charset=utf8";
        $this->username = "chithanhvtpt";
        $this->password = "pengalx1";
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->sdn, $this->username, $this->password);
            return $conn;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}