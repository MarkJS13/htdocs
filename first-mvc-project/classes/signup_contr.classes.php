<?php
// CONTROLLER - tasks is to handle user inputs

class SignUp_Contr extends SignUp{

    private $username;
    private $password;
    private $retype_p;
    private $email;

    public function __construct($username, $password, $retype_p, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->retype_p = $retype_p;
        $this->email = $email;
    }

    public function signupUser () { 
        if($this->emptyInput() == false) {
            // echo "Empty input";
            header('Location: ../index.php?error=empty');
            exit();
        }

        if($this->invalidUsername() == false) {
            // echo "Empty invalid username";
            header('Location: ../index.php?error=username');
            exit();
        }

        if($this->invalidEmail() == false) {
            // echo "invalid email";
            header('Location: ../index.php?error=email');
            exit();
        }

        if($this->passwordMatch() == false) {
            // echo "password doees not match";
            header('Location: ../index.php?error=password');
            exit();
        }

        if($this->existingUser() == false) {
            // echo "Has existing user";
            header('Location: ../index.php?error=alreadytaken');
            exit();
        } // if all of these conditions passed, it means that you can now signup.

        $this->setUser($this->username, $this->password, $this->email);
    }

// this methods below are the error handlers

    private function emptyInput () { // filtering / checking the users input
        $result = false;

        if(empty($this->username) || empty($this->password) || empty($this->retype_p) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidUsername () {
        $result = false;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail() {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function passwordMatch() {
        $result = false;
        if($this->password  !== $this->retype_p) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function existingUser() {
        $result = false;
        if(!$this->checkUser($this->username, $this->email )) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

}