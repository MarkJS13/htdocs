<?php

session_start();

include 'connections/connection.php';
$conn = connection();

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql =  "SELECT * FROM student_users WHERE username = '$username' AND password = '$password'";
    $user = $conn->query($sql) or die($conn->error);
    $row = $user -> fetch_assoc();
    $total = $user->num_rows;


    if($total > 0) {
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['Access'] = $row['access'];

        echo $_SESSION['UserLogin']; 
        
        header('Location: index.php');
    } else {
        echo 'no registered user';
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
    <title>Student Management System </title>
<body>

<h1> Login Page</h1>
<br>
    
    <form action="" method="post">
        <label> Username </label>
        <input type="text" name="username">
        <label> Password</label>
        <input type="password" name="password">
        <button type="submit" name="submit"> Login </button>
    </form>

</body>
</html>