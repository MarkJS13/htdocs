<?php

class Connection {
    private $server = 'localhost';
    private $username = 'root';
    private $password = 'password';
    private $database = 'crud-class-based';

    protected function connect() {
        $dsn = 'mysql:host=' . $this->server . ';dbname=' . $this->database;
        $conn = new PDO($dsn, $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        
        return $conn;
    }
}