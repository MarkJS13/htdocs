<?php

include 'connection.php';


if(isset($_POST['create'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `account`(`name`, `course`, `username`, `password`) VALUES ('$name', '$course', '$username', '$password')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    

}






?>

<a href="login.php"> Back to login</a>

<form action="" method="post">
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Course</label>
        <input type="text" name="course">
    </div>
    <div>
        <label>Username</label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <button type="submit" name="create"> Sign Up</button>
</form>