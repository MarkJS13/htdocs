<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */
$intt = 9;
// Echo - Output strings, numbers, html, etc
echo 'Hello';
echo 123;
echo '<h1>Hello</h1>';

// print - Similar to echo, but a bit slower
print 'Hello';
print_r($intt); // print_r - Gives a bit more info. Can be used to print arrays
var_dump(49.8); // prints also its data type

var_export('hello'); // also prints the qoute
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
    <h1> <?php echo'yes'; ?> </h1>
</body>
</html>