<?php

spl_autoload_register('classAutoLoader');

function classAutoLoader ($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }

    $extension = '.classes.php';

    include_once $path . $className . $extension;

}


