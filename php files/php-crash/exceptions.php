<?php

function inverse($x) {
    if(!$x) {
        throw new Exception('Division by zero');
    }

    return 1/$x;
}


echo inverse(10);

try {
    echo inverse(0);
    echo inverse(0);

} catch(Exception $ex) {
    echo 'Caught exception' . $ex-> getMessage(), ' '; 
} finally {
    echo 'Will print anyway';
}



?>
