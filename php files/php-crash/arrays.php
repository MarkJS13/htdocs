<?php 
   $numbers = [1, 2, 3, 4, 5];
   $fruits = ['apple', 'mango', 'grapes'];
   
   
//    print_r($numbers);
//    print_r($fruits);

//     echo $fruits[0];

    // Associative array or Object look a like

    $colors = [
        1 => 'red',
        4 => 'green',
        2 => 'blue'
    ];

    // print_r($colors);
    // echo($colors[1]);

    $object = [
        'name' => 'mark',
        'age' => 123,
        'country' => 'Ph'
    ];

    // print_r($object);
    // echo $object['name'];
    // echo $object['age'];
    // echo $object['country'];

    $person = [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'course' => 'ComSci'
    ];

  //  echo $person['first_name'];


  $people = [
    '1arr' => [1,2,3,4],
    '2arr' => [
        '1darr' => [.1, .2, .3, .4]
    ],
    '3arr' => [9, 10]
  ];

  //print_r($people);
  //echo($people['1arr'][3]); // get 4
  //echo($people['2arr']['1darr'][1]); // get 2

  var_dump(json_encode($people));
  

  ?>