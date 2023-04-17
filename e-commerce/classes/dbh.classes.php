<?php 

class Dbh {
    private $srvr = 'localhost';
    private $user = 'root';
    private $password = 'password';
    private $db = 'e-commerce';

    protected function connection () {
        try {
            $dsn = "mysql:host=$this->srvr;dbname=$this->db";
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
        
    }


}