<?php


//set a cookie
setcookie('name', 'Brad', time() + 86400);


setcookie('name', '', time() - 86400);
 // unsetting the cookie


if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}



?>
