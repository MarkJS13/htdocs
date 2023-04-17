<?php

class UsersView extends Users {
    
    public function showUsers($name) {
        $result = $this->getUser($name);
        echo "Full name: " . $result[0]['first_name'] . $result[0]['last_name'];
        echo '<br>';
        echo "Birthday: " . $result[0]['birthday'];
    }

    public function setUsers($firstname, $lastname, $birthday) {
        $this->setUser($firstname, $lastname, $birthday);
    }


}
