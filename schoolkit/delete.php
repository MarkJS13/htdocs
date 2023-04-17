<?php

include 'connections/connection.php';

$conn = connection();

if(isset($_POST['delete'])) {
    $id = $_POST['ID'];

    $sql = "DELETE FROM `student_list` WHERE id = '$id' ";
    $conn->query($sql) or die($conn->error);


    header('Location: index.php');
}



?>