<?php
if(!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['UserLogin'])) {
    echo 'Welcome ' . $_SESSION['UserLogin'];
} else {
    echo 'Welcome Guest';
}

include 'connection/connection.php';

$conn = connection();

$sql = "SELECT * FROM users_list ORDER by id DESC";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();
$row_numbers = $result->num_rows;



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

    <form action="result.php" method="get">
        <input type="text" name="search" id="search">
        <button type="submit" name="query">  search </button>
    </form>
    

    <a href="add.php"> Add new user </a>

    
    <?php if(isset($_SESSION['UserLogin'])) { ?>
        <a href="logout.php"> Logout </a>
    <?php } else {?>
        <a href="login.php"> Login </a>
    <?php } ?>

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

</div>
    
</body>
</html>