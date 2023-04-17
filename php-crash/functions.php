<?php

    $y = 900;
    function registerUser($email) {
        $x = 90;
        echo "User registered as this $email";
        global $y; // to use global variables --
        //echo $y;
    };

    //echo $x;


    registerUser('mark@yahoo.com');


    echo '<br>';

    function add($num1 = 32, $num2 = 62, $num3 = 43) {
        return $num1 + $num2 + $num3;
    }
    
    echo add();

    echo '<br>';

    $numbers = [1, 2, 3, 4];

    function addAll() {
        $start = 0;
        global $numbers;
        foreach($numbers as $nums) {
            //echo $nums;
            $start += $nums;
        }

        echo $start;
    }


    addAll();


    ///

    $subtract = function($n1, $n2) {
        return $n1 - $n2;        
    };

    echo '<br>';
    echo $subtract(100, 12);


    $multiply = fn($n1, $n2) => $n1 * $n2; // arrow functions

    echo '<br>';
    echo $multiply(100, 12);



?>