<?php

include 'connection/connection.php';

$conn = connection();


$search = $_GET['search'];

if (empty($search)) {
    header('Location: dashboard.php');
    exit;
}


$sql = "SELECT * FROM `users_list` WHERE `first_name` LIKE '%$search%' || `last_name` LIKE '%$search%' || `gender` LIKE '%$search%' || `age` LIKE '%$search%' ORDER by id DESC";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();


if(!$row) {
    // Handle no search results found here

    header('Location: dashboard.php');
    exit;
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

    <a href="dashboard.php"> Go back to dashboard </a>

    <main class="grid">
    <div class="header">
            <h2> First Name </h2>
            <h2> Last Name </h2>
            <h2> Age </h2>
            <h2> Gender </h2>
        </div>

    <div class="cells">
    <?php do { ?>
            <section class="fname">
                
                <div> <a href="details.php?ID=<?php echo $row['id'] ?>"> View </a>  <?php echo $row['first_name'] ?> </div>

            </section>

            <section class="lname">
                <div> <?php echo $row['last_name'] ?> </div>
            </section>

            <section class="age">
                <div> <?php echo $row['age'] ?> </div>
            </section>

            <section class="gender">
                <div> <?php echo $row['gender'] ?> </div>
            </section>
    <?php } while($row = $result->fetch_assoc()); ?>
        </div>
   
    </main>

    
</body>
</html>