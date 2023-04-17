<?php
// CONTROLLER - tasks is to handle user inputs

class Login_Contr extends Login{
    private $username;
    private $password;
    

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser () { 
        if($this->emptyInput() == false) {
            // echo "Empty input";
            header('Location: ../index.php?error=empty');
            exit();
        }


        $this->getUser($this->username, $this->password);
    }


    private function emptyInput () { // filtering / checking the users input
        $result = false;

        if(empty($this->username) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    

}