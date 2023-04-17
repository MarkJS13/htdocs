<?php
include 'connection.php';

$id = $_GET['ID'];


$sql = "DELETE FROM `people_data` WHERE `id`='$id'";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

header('Location: index.php');
?>