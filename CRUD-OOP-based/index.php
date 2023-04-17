<?php

include_once 'includes/class.autoloader.php';

$function = new Functionality();

if(isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $ign = $_POST['ign'];
    $rank = $_POST['rank'];


    
    $function->add($fullname, $ign, $rank);
}
    
    $function->delete('heracle');
    //$function->edit('chaknu', 'yawi', 'gm', 9);
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
            <label> Fullname </label>
            <input type="text" name="fullname">
        </div>
        <div>
            <label> In-Game Name</label>
            <input type="text" name="ign">
        </div>
        <div>
            <label> Rank </label>
            <input type="text" name="rank">
        </div>
        <div>
            <input type="submit" value="input" name="submit">
        </div>
        
    </form>


    <?php foreach ($function->view() as $row) { ?>
        <li> <?php echo $row['fullname'] ?> </li>
        <li> <?php echo $row['ign'] ?> </li> 
        <li> <?php echo $row['rank'] ?> </li> 
    <?php } ?>
   

    
</body>
</html>