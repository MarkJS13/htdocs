<?php

spl_autoload_register('classAutoloader');

function classAutoloader($className) {
    $path = 'classes/';
    $extension = '.php';

    $fullpath = $path . $className . $extension;

    if(!file_exists($fullpath)) {
        return false;
    }

    include $path . $className . $extension;

}