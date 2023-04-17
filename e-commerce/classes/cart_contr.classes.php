<?php

session_start();

class Cart_Contr extends Cart_Model{

    public function getCart($id) {
        if($this->checkCart($id)[0]['id'] === 1) {
            $_SESSION['kyrie-1'] = $this->checkCart($id);
        } else if($this->checkCart($id)[0]['id'] === 2) {
            $_SESSION['kyrie-2'] = $this->checkCart($id);
        } else if($this->checkCart($id)[0]['id'] === 3) {
            $_SESSION['kyrie-3'] = $this->checkCart($id);
        } else if($this->checkCart($id)[0]['id'] === 4) {
            $_SESSION['kyrie-4'] = $this->checkCart($id);
        }
    }
}