<?php


$conn = mysqli_connect('localhost', 'root', 'password', 'basic_crud');

if(mysqli_error($conn)) {
    die($conn->error);
} 


?>