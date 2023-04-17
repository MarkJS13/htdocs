<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/


$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_ADD_SLASHES);
echo $newstr;


// filter_var used to validate and sanitize a value

// takes on 2 parameters,  the value and type of check to use

?>
