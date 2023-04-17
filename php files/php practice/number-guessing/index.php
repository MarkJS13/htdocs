<?php
$generate = rand(1, 10);
$number = $_POST['number'];

$greet1;
$greet2 = '';

if($number == $generate) {
    $greet1 = 'You guess it right! ';
    $greet2 = "$generate is the right number";
} else {
    $greet1 = 'Wrong guess ;(';
    $greet2 = "$number is wrong, guess again!";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <style>
 
        h1, h2, h3 {
            text-align: center;
        }

        h3 {
            font-weight: 400;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

    </style>

    <title>Document</title>
</head>

    <div class="display">
        <h2> <?php echo $greet1 ?> </h2> 
        <h3> <?php echo $greet2 ?> </h3>
    </div>

    <h1>Guess the number!</h1>
    
    
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="number" min="0" max="10" name="number">
        <input type="submit" name="submit">

    </form>

</body>
</html>