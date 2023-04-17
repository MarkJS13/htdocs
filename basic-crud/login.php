<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    include 'connection.php';

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `account` WHERE `username`='$username' AND `password`='$password' ";
        $result = $conn->query($sql) or die(mysqli_error($conn));
        $row = $result->fetch_assoc();
        
        //&& $row['access'] === 'administrator'

        if($row !== null) {
            $_SESSION['Admin'] = $row['access'];
            $_SESSION['User'] = $row['username'];
            header('Location: index.php');
        }
        else {
            echo "<h1> No account detected </h1>";
            
        }
        
    

    } 

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
            <label> Username </label>
            <input type="text" name="username">
        </div>
        <div>
            <label> Password </label>
            <input type="password" name="password">
        </div>

        <button type="submit" name="login"> Login </button>
    </form>

    <a href="signup.php"> No account? Signup </a>
    
</body>
</html>