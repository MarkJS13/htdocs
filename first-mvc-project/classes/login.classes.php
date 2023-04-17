<?php

// MODEL - communicates with the database
class Login extends Dbh { 

    protected function getUser($username, $password) { //checks if the user already exists in the database.. return false if it existed in database otherwise true.
        $sql = "SELECT `users_password` FROM `users` WHERE users_username = ? OR users_email = ?";
        $stmt = $this->connect()->prepare($sql);
        
    
        if(!$stmt->execute([$username, $password])) { // if the eexecution is failed
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        if($stmt->rowCount() == 0) { // no signed up user.
            $stmt = null;
            header('Location: ../index.php?error=usernotfound');
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHashed[0]['users_password']);


        if($checkPwd == false) { // no signed up user.
            $stmt = null;
            header('Location: ../index.php?error=usernotfound');
            exit();
        } else if ($checkPwd == true) {
            $sql = "SELECT * FROM `users` WHERE users_username = ? OR users_email = ? AND users_password = ?";
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute([$username, $username, $password])) { // if the eexecution is failed
                $stmt = null;
                header('Location: ../index.php?error=stmtfailed');
                exit();
            }

            if($stmt->rowCount() == 0) { // no signed up user.
                $stmt = null;
                header('Location: ..index.php?error=usernotfound');
                exit();
            }


            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //print_r($user);
            session_start();
            $_SESSION['userid'] = $user[0]['id'];
            $_SESSION['username'] = $user[0]['users_username'];

            $stmt = null;
        }

        $stmt = null; // this is for clearing up memory.

    }



}