<?php

$server = 'localhost';
$username = 'root';
$password = 'password';
$database = 'pagination';


$conn = new mysqli($server, $username, $password, $database);

if(mysqli_connect_error()) {
    echo 'Connection error : ' . mysqli_connect_error(); 
    die();

} 


?>