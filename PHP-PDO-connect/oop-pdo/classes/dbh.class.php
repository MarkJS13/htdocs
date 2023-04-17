<?php

class Dbh { // connection between our code and our database.
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'password';
    private $dbName = 'php-pdo-connect';


    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' .  $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // to make it associative array.

        return $pdo;
    }

}
