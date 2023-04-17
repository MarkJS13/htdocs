<?php

if(!isset($_SESSION)) {
    session_start();
}


if(isset($_SESSION['UserLogin'])) {
    echo "Welcome " . $_SESSION['UserLogin'];
} else {
    echo "Welcome Guest";
}


include 'connections/connection.php';

$conn = connection();

$sql = 'SELECT * FROM student_list ORDER BY id DESC';
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


    <h1> Student Management System </h1>

    <form action="result.php" method="get">
        <input type="text" name="search">
        <button type="submit" name="query"> Search </button>

    </form>
    
    <?php if(isset($_SESSION['UserLogin'])) { ?> 
        <a href="logout.php"> Logout </a>
    <?php } else {?>
        <a href="login.php"> Login </a>
    <?php }?>

    <a href="add.php"> Add new student</a>

    <table>
        <thead > 
            <tr>
                <th></th>
                <th> First Name </th>
                <th> Last Name </th>
                <th> Birthday </th>
                <th> Gender </th>
            </tr>
        </thead>
        <tbody>
            <?php do { ?>
            <tr>
                <td><a href="details.php?ID=<?php echo $row['id'] ?>">view </a></td> 
                <td> <?php echo $row['first_name'] ?> </td>
                <td> <?php echo $row['last_name'] ?> </td>
                <td> <?php echo $row['birth_day'] ?> </td>
                <td> <?php echo $row['gender'] ?> </td>
            </tr>

            <?php } while($row = $students->fetch_assoc()); ?>
        </tbody>
        



    </table>

   
    
</body>
</html>