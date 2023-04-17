<?php

declare(strict_types=1);
include 'class.autoload.inc.php';


$num1 = $_POST['num1'];
$oper = $_POST['oper'];
$num2 = $_POST['num2'];


$calcu = new Calc((int)$num1, $oper, (int)$num2);
try {
    echo $calcu->calculate();
} catch (TypeError $e) {
    echo "Error " . $e->getMessage();
}

$sample = new Sample();
print_r($sample);

?>