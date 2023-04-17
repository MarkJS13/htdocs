<?php

if(isset($_POST['login'])) {
    // grabbing the data from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    //Instantiate SignUpContr class
    
    include_once 'class-autoloader.inc.php';

    $login = new Login_Contr($username, $password);

    //Running error handlers and user signup

    $login->loginUser();

    // Going back to front page
    header('Location: ../index.php?error=none');

}