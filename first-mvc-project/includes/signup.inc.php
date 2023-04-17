<?php

if(isset($_POST['signup'])) {
    // grabbing the data from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $retype_p = $_POST['re-type_p'];
    $email = $_POST['email'];

    //Instantiate SignUpContr class
    include_once 'class-autoloader.inc.php';

    $signup = new SignUp_Contr($username, $password, $retype_p, $email);

    //Running error handlers and user signup

    $signup->signupUser();

    // Going back to front page
    header('Location: ../index.php?error=none');

}