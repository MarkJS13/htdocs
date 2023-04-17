<?php

session_start();


include 'connection/connection.php';

$id = $_GET['ID'];

$conn = connection();

$sql = "SELECT * FROM `users_list` WHERE id ='$id'";

$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();


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

 <?php if(isset($_SESSION['Access']) && $_SESSION['Access'] === 'admin') { ?>
   <p> <?php echo 'You have an '. $_SESSION['Access']. ' access'; ?> </p>

  <?php } else { header('Location: dashboard.php');} ?>

    <div class="details">
        <h1> This is <?php echo $row['first_name'] ?>'s profile </h1>

        <div class="dets">
            <h2> Fullname: <?php echo $row['first_name'] . ' ' . $row['last_name'] ?> </h2>
            <h2> Age: <?php echo $row['age'] ?> </h2>
            <h2> Birthday: <?php echo $row['birthday'] ?> </h2>
            <h2> Gender: <?php echo $row['gender'] ?> </h2>
        </div>
    </div>
    

    <a href="edit.php?ID=<?php echo $row['id'] ?>"> Edit </a>

    <form action="delete.php?ID=<?php echo $row['id'] ?>" method="post">
        <button type="submit" name="delete"> Delete </button>
        <input type="text" name="id" value="<?php echo $row['id'] ?>">
    </form>

    <a href="dashboard.php"> Go back to dashboard </a>

    </div>
    
</body>
</html>