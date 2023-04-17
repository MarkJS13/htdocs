<?php

class Cart_Model extends Dbh{
    protected function checkCart($id) {
        $sql = "SELECT * FROM `items` WHERE id = ?";

        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetchAll();
    }

}