<?php

session_start();

include 'connection/connection.php';

$conn = connection();




if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user_accounts` WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql) or die($conn->error);
    $row = $result->fetch_assoc();
    
    $row_num =  $result->num_rows;
    //echo $row_num;

    if($row_num > 0) {
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['Access'] = $row['access'];

       header('Location: dashboard.php');

       //echo $_SESSION['UserLogin'];
    } else {
        echo 'Invalid Login credentials';
    }

    
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
        <div>
            <label> Username </label>
            <input type="text" name="username">
        </div>

        <div>
            <label> Password </label>
            <input type="password" name="password">
        </div>

        <button type="submit" name="login"> Login  </button>

    </form>

</div>
    
</body>
</html>