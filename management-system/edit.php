<?php

include 'connection/connection.php';

$conn = connection();

$id = $_GET['ID'];

$sql = "SELECT * FROM `users_list` WHERE id = '$id'";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();


if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];


    $sql = "UPDATE `users_list` SET `first_name`='$fname', `last_name`='$lname', `age`='$age', `gender`='$gender' WHERE id ='$id'";

    $conn->query($sql) or die($conn->error);

    header('Location: details.php?ID='.$id);

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
            <input type="text" name="fname" value="<?php echo $row['first_name'] ?>">
        </div>
        <div class="lname">
        <label> Last Name</label>
            <input type="text" name="lname" value="<?php echo $row['last_name'] ?>">
        </div>

        <div class="age">
        <label> Age</label>
            <input type="text" name="age" value="<?php echo $row['age'] ?>">
        </div>

        
        <div class="gender">
        <label> Gender</label>
            <select name="gender">
                <option value="Male" <?php echo ($row['gender'] == 'Male')? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?php echo ($row['gender'] == 'Female')? 'selected' : ''; ?>>Female</option>
            </select>
        </div>

        <button type="submit" name="submit"> Save Changes </button>

    </form>

    </div>
    
</body>
</html>