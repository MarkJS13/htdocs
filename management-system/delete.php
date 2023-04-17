<?php
include 'connection/connection.php';

$conn = connection();
echo $id = $_POST['id'];
$sql = "DELETE FROM `users_list` WHERE id = $id";

$conn->query($sql) or die($conn->error);

header('Location: dashboard.php');

?>
