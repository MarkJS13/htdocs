<?php

// MODEL - communicates with the database
class SignUp extends Dbh { 

    protected function setUser($username, $password, $email) { //checks if the user already exists in the database.. return false if it existed in database otherwise true.
        $sql = "INSERT INTO `users`(`users_username`, `users_password`, `users_email`) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    
        if(!$stmt->execute([$username, $hashedPwd, $email])) { // if the eexecution is failed
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null; // this is for clearing up memory.

    }

    protected function checkUser($username, $email) { //checks if the user already exists in the database.. return false if it existed in database otherwise true.
        $sql = "SELECT users_username FROM users WHERE users_username = ? OR users_email = ?";
        $stmt = $this->connect()->prepare($sql);
        
        if(!$stmt->execute([$username, $email])) { // this is for checking the error. unsuccessful
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        $resultCheck = ''; //if successful
        if($stmt->rowCount() > 0) { // this is when no error and check if it has a user
            $resultCheck = false; // return false means that user already exists.
        } else {
            $resultCheck = true; // return true means no existing user found. username and email are available.
        }


        return $resultCheck;

    }


}