<?php

    function connection() {
        $server = 'localhost';
        $username = 'root';
        $password = 'password';
        $database = 'management_system';
    
    
        $conn = new mysqli($server, $username, $password, $database);
    
        if($conn->connect_error) {
            echo $conn->connect_error;
        } else {
            return $conn;
        }
    }

?>