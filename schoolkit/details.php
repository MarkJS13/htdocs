<?php

if(!isset($_SESSION)) {
    session_start();
}


if(isset($_SESSION['Access']) && $_SESSION['Access'] == 'administrator') {
    echo "Welcome " . $_SESSION['UserLogin'] . '<br>';

} else {
    header('Location: index.php');
}


include 'connections/connection.php';

$conn = connection();

$id = $_GET['ID'];


$sql = "SELECT * FROM `student_list` WHERE id = '$id' ";
$students = $conn->query($sql) or die($conn->error);
$row = $students->fetch_assoc();

// fetching data from mysql database

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


    

    <form action="delete.php" method="post">
    
    <a href="edit.php?ID=<?php echo $row['id']?>">Edit</a>
        <button type="submit" name="delete"> Delete </button>
        <input type="text" name="ID" value="<?php echo $row['id']?>">
    </form>


    <h1> <?php echo 'This is ' . $row['first_name'] . ' ' . $row['last_name'] . "'s" . ' student info: ' . 'birthday: ' . $row['birth_day'] ?>  </h1>

    <a href="index.php"> Back to dashboard </a>
    
   
</body>
</html>