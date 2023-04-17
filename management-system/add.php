<?php

include 'connection/connection.php';

$conn = connection();

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];


    $sql = "INSERT INTO `users_list`(`first_name`, `last_name`, `age`, `birthday`, `gender`) VALUES ('$fname','$lname','$age','$birthday','$gender')";

    $conn->query($sql) or die($conn->error);

    header('Location: dashboard.php');

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

    <div class="title"> 
        <h1> Management System </h1>
    </div>

    <form action="" method="post">
        <div class="fname">
            <label> First Name</label>
            <input type="text" name="fname">
        </div>
        <div class="lname">
        <label> Last Name</label>
            <input type="text" name="lname">
        </div>

        <div class="age">
        <label> Age</label>
            <input type="text" name="age">
        </div>

        <div class="birthday">
        <label> Birthday</label>
            <input type="date" name="birthday">
        </div>

        <div class="gender">
        <label> Gender</label>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <input type="submit" name="submit">

    </form>

    </div>
    
</body>
</html>