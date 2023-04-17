<?php
if(!isset($_SESSION)) {
    session_start();
}


if($_SESSION['Admin'] === 'administrator') {
    $msg = 'Welcome ' . $_SESSION['Admin'];
} else if($_SESSION['Admin'] !== 'administrator') {
    $msg = 'Welcome ' . $_SESSION['User'];
} else {
    $msg = 'Welcome Guest';
}

include 'connection.php';

$sql = "SELECT * FROM `people_data` ";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row =  mysqli_fetch_assoc($result);

//print_r($row);

(isset($_GET['message']))? '' : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Document</title>
</head>
<body>


    <div class="logout">
        <a href="logout.php"> << Logout >></a>
    </div>


    <h1> <?php echo $msg ?> </h1>


    <h1 class="hide"> <?php  echo isset($_GET['message']) ? $_GET['message'] : '';
 ?> </h1>
<main>

    <table>
    <tr>

        <th>Actions</th>
        <th> Name </th>
        <th>Address</th>
        <th>Cellphone No.</th>
        
    </tr>
    
    <?php do { ?>
    <tr>
        <td> 
            <a href="edit.php?ID=<?php echo $row['id'] ?>">Edit</a>
            <a href="delete.php?ID=<?php echo $row['id'] ?>">Delete</a>
            
        </td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td> <?php echo $row['cellphone_no.'] ?>  </td>

    </tr>
    <?php } while($row =  mysqli_fetch_assoc($result)); ?>
    </table>

    <div class="add">
        <a href="add.php">Add new people</a>
    </div>
</main>
    
</body>
</html>