<?php
//declare(strict_types = 1);
include 'includes/autoloader.inc.php';


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

    <h1>   
    <?php

    $john = new Persons\Person('jack', 'blue', 25);
        
    try {
        $john->setName(5);
        echo $john->getName();
    } catch(TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }
    
    //echo $john->getName();

    ?> 
     
    </h1>
    
</body>
</html>