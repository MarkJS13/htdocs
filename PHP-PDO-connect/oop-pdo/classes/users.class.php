<?php

// MODEL - interacts with the database or in this case, the Dbh class.

class Users extends Dbh {

    protected function getUser ($firstname) {
        $sql = "SELECT * FROM users WHERE first_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname]);
        $results = $stmt->fetchAll();

        return $results;
    }

    protected function setUser ($firstname, $lastname, $birthday) {
        $sql = "INSERT INTO users(first_name, last_name, birthday) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $birthday]);
    }

}


// its not a good practice to add user input directly to this class(MODEL). That's why we need to put it in the controller.