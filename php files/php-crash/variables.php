<?php

$name = 'Brad';
$age = 15;
$year = 'brad';
$has_kids = true;
$how_many = 10000;
$cash_on_hand = 10000;
// echo($name);
// var_dump($year);


define('HOST', 'localhost');

echo HOST; //constant

 if($cash_on_hand > 1000) {
    echo "my money is greater than 1000 its $how_many pesos";
} else if($cash_on_hand < 1000) {
    echo 'my money is less than 1000';
} else {
    echo 'my money is exactly 1000';
}


$add = '5' + '5';
var_dump($add)

?>