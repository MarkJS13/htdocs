<?php

class Dbh  {
    private $server = 'localhost';
    private $username = 'root';
    private $password = 'password';
    private $database = 'first-class-based-project';

    protected function connect () {
        try {
            $pdo = new PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
        catch(PDOException $e) { 
            print "Error!: " . $e->getMessage() . "<br>";
            die();
        }

    }
}