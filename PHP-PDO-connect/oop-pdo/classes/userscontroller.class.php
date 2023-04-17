<?php

// Controller - handles the inputs from the user

class UsersController extends Users {
    public function createUser($firstname, $lastname, $birthday) {
        $this->setUser($firstname, $lastname, $birthday);
    }
}