<?php
///for loop

for($x = 0; $x <= 5; $x++) {
    echo $x;
}

echo '<br>';

// while loop

$y = 5;

while($y >= 0) {
    echo "Number: $y <br>";
    $y--;

};



echo '<br>';

// do while loop

$z = 10;

do {
    echo 'limit';
    $z++;
} while($z <= 5);


echo '<br>';

// forEach
$arrayOfNumbers = [11, 22, 33, 44];

foreach($arrayOfNumbers as $index => $post) {
    if($post < 30) {
        echo "index:" . $index + 1 . " value: $post <br>";
    }
}


$ten = 10;


?>