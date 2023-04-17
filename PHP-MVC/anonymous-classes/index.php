<?php

include_once "classes/simpleclass.classes.php";


// regular class
$obj = new SimpleClass();
//$obj->helloWorld();

// Anonymous class
// -- this is helpful when you only want to use a class once and not to use it again somewhere.
 
$newObj = new Class { 
    public function helloWorld() {
        echo 'Hello World';
    }
};

$newObj->helloWorld();

