<?php
    $fruits = ['apples', 'orange', 'pear'];

    // Get length // .length()

    //echo count($fruits);

    // Search array // like contains or find
    echo '<br>';

    //var_dump(in_array('apples', $fruits));

    // Add array // is like push
    $fruits[] = 12;

    array_push($fruits, 'blueberry', 'strawberry');
    array_unshift($fruits, 'banana');

    

    //remove 
    
    array_pop($fruits);
    array_shift($fruits);
    unset($fruits[1]);

    // split array


    // $chunked_array = array_chunk($fruits, 2);
    // echo '<br>';
    // print_r($chunked_array);
    // echo '<br>';
    // print_r($fruits);

    $arr1 = [1,2,3,4];
    $arr2 = [4,5,6,7];


    $arr3 = array_merge($arr1, $arr2); // merge or concatenate
    $arr4 = [...$arr1, ...$arr2]; // spread operator

    //print_r($arr4);

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];


    $c = array_combine($a, $b); // to make combine as key and value 
    
    //print_r($a);

    echo '<br>';
    //print_r($b);

    echo '<br>';
    //print_r($c);

    echo '<br>';
    $keys = array_keys($c); // took the keys and put it into an array.
    //print_r($keys);
    
    $flipped = array_flip($c); // switch position for key and value

    //print_r($flipped);


    $numbers = range(1, 20);

    //print_r($numbers);



    // $newNumbers = array_map(function($number) { // map
    //     return "Number $number" . '<br>';
    // }, $numbers);


    //print_r($newNumbers);


    $filterArray = array_filter($numbers, fn($number) => $number >= 10); // filter

    //print_r($filterArray)

    $newNumbers = array_reduce($numbers, fn($carry, $number) => $carry + $number); //reduce

    var_dump($newNumbers);


?>