<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = "classes/";
    $extension = ".class.php";
    
    $fullPath = $path . $className . $extension;

    if(!file_exists($fullPath)) {
        return false;
    } // catching an error

    include_once $fullPath;
}

?>