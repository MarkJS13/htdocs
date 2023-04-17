<?php
include 'connection.php';

$id = $_GET['ID'];

$sql = "SELECT * FROM `people_data` WHERE `id`='$id' ";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row =  mysqli_fetch_assoc($result);


if(isset($_POST['edit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $cellphone = $_POST['cellphone'];

    $sql = "UPDATE `people_data` SET `name`='$name',`address`='$address',`cellphone_no.`='$cellphone' WHERE `id`='$id'";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    header('Location: index.php');

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

    <a href="index.php"> Back </a>
    <form action="" method="post">
        <div>
            <label> Name </label>
            <input type="text" name="name" value="<?php echo $row['name'] ?>">
        </div>
        <div>
            <label> Address </label>
            <input type="text" name="address" value="<?php echo $row['address'] ?>">
        </div>
        <div>
            <label> Cellphone No. </label>
            <input type="text" name="cellphone" value="<?php echo $row['cellphone_no.'] ?>">
        </div>

        <button type="submit" name="edit"> Save changes </button>
    </form>

    
</body>
</html>