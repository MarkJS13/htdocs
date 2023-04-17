<?php

$string2 = "<script> alert('hello') </script>";
//echo $string2;

//echo htmlspecialchars($string2); /// if you do not want to pass as an html


printf('%s likes to %s', 'Brad', 'code');

printf('1+1=%d', 1+1);


printf('This is what %s looks like in year %d', 'handsome', 85);



$file = 'loops.php';

$open = fopen($file, 'r');

$read = fread($open, filesize($file));
fclose($open);

echo $read;



?>


<h1> this is date website </h1>
<h2> This is a time </h2>


<?php include 'time&date.php' ?>