<?php
declare(strict_types = 1);
include 'includes/class.autoload.inc.php';

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
    <form action="includes/calc.inc.php" method="post">
    <p>My own calculator! </p>
    <input type="number" name="num1" placeholder="First number">
    <select name="oper">
        <option value="add"> Add </option>
        <option value="sub"> Subtract </option>
        <option value="mul"> Multiply </option>
        <option value="div"> Divide </option>
    </select>
    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit"> Calculate </button>
    </form>
</body>
</html>