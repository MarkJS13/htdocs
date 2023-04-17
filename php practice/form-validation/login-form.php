<?php

    $name = '';
    $email = '';
    $birthday = '';
    $suggestions = '';
    

if(isset($_POST['submit'])) {
    $name = clear_inputs($_POST['name']);
    $email = clear_inputs($_POST['email']);
    $birthday = clear_inputs($_POST['birthday']);
    $suggestions = clear_inputs($_POST['suggestions']);
    
}

$required_name = '';
$required_email = '';   


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(empty($_POST['name'])) {
        $required_name = '*Name is required';
    } 

    if(empty($_POST['email'])) {
        $required_email = '*Email is required';
    } 
};



function clear_inputs($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>

<div class="container">

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h1> Form Validation </h1>
        <div>
            <label for="name"> Name: (required) </label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="email"> Email: (required) </label>
            <input type="text" name="email">
        </div>

        <div>
            <label for="birthday"> Birthday: </label>
            <input type="date" name="birthday">
        </div>


        <div class="textarea">
            <label for="suggestion"> Suggestions: </label>
            <textarea name="suggestions"> </textarea>
        </div>
    

    <div class="submit">
        <input type="submit" name="submit">
    </div>
        
    </form>

    <div class="required">
        <p> <?php echo $required_name ?> </p>
        <p> <?php echo $required_email ?> </p>
    </div>

    <div class="display">
        <p> <?php echo $name ?> </p>
        <p> <?php echo $email ?> </p>
        <p> <?php echo $birthday ?> </p>
        <p> <?php echo $suggestions ?> </p>

    </div>

    </div> 
</body>
</html>