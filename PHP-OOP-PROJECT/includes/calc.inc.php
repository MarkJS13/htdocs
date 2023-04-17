<?php
declare(strict_types = 1);
include 'class.autoload.inc.php';


if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $operator = $_POST['oper'];
    $num2 = $_POST['num2'];

    $calculator = new Calc($operator, (int)$num1, (int)$num2);

    try {
        echo $calculator->calculate();
    } catch (TypeError $e) {
        echo "Error " . $e->getMessage();
    }
    
}


?>