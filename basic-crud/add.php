<?php
include 'connection.php';



if(isset($_POST['edit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $cellphone = $_POST['cellphone'];

    $sql = "INSERT INTO `people_data`(`name`, `address`, `cellphone_no.`) VALUES ('$name', '$address', '$cellphone')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    header('Location: index.php?message=' . $name . ' successfully added');


};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <div>
            <label> Name </label>
            <input type="text" name="name">
        </div>
        <div>
            <label> Address </label>
            <input type="text" name="address">
        </div>
        <div>
            <label> Cellphone No. </label>
            <input type="text" name="cellphone">
        </div>

        <button type="submit" name="edit"> Add new people </button>
    </form>

    
</body>
</html>