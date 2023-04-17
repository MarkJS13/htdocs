<?php

class Functionality extends Connection{
    public function add($fullname, $ign, $rank) {
        $sql = 'INSERT INTO `mobile_legends`(`fullname`, `ign`, `rank`) VALUES (?, ?, ?)';

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fullname, $ign, $rank]);


    }

    public function view() {
        $sql = 'SELECT * FROM `mobile_legends`';
        $stmt = $this->connect()->query($sql);
        $row = $stmt->fetchAll();

        return $row;

    }

    public function delete($ign) {
        $sql = 'DELETE FROM `mobile_legends` WHERE ign = ?';
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$ign]);

    }

    public function edit($fullname, $ign, $rank, $id) {
        $sql = 'UPDATE `mobile_legends` SET `fullname`=?, `ign`=?, `rank`=? WHERE `id`=?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fullname, $ign, $rank, $id]);
    }
    
}


?>