<?php
$age = 23;

if($age > 19) {
    echo 'You are not a teenager and old';
} else if($age < 19 && $age > 12) {
    echo 'You are a teenager';
} else if($age === 19){
    echo 'Last year of being a teenager';
} else if($age <= 12) {
    echo 'You are child';
} 


$yourAge = 31;

$basketball_league = [
    'kids' => [10, 'You are allowed to play for kids division'],
    'mosquito' => [14, 'You are allowed to play for mosquito division'],
    'midget' => [17, 'You are allowed to play for midget division'],
    'juniors' => [21, 'You are allowed to play for juniors division'],
    'seniors' => [30, 'You are allowed to play for seniors division'],
    'senior_citizen' => [100, 'You are allowed to play for senior citizen division']
];

//echo $basketball_league['kids'][0];

echo '<br>';

if($yourAge <= $basketball_league['kids'][0]) {
    echo $basketball_league['kids'][1];
} else if($yourAge <= $basketball_league['mosquito'][0]) {
    echo $basketball_league['mosquito'][1];
} else if($yourAge <= $basketball_league['midget'][0]) {
    echo $basketball_league['midget'][1];
} else if($yourAge <= $basketball_league['juniors'][0]) {
    echo $basketball_league['juniors'][1];
} else if($yourAge <= $basketball_league['seniors'][0]) {
    echo $basketball_league['seniors'][1];
} else {
    echo $basketball_league['senior_citizen'][1];
}


echo '<br>';

$ifNegative = 1;

// if($ifNegative < 0) {
//     echo 'that is negative';
// };

// ternary operator

echo $ifNegative < 0 ? 'that is negative' : 'Positive';


// coalescing operator
echo '<br>';

$foo = 2;
$bar = $foo ?? 'default';
echo $bar;

echo '<br>';
//switch case

$favnumber = 12;

switch($favnumber) {
    case 1: 
        echo 'Your favorite number is 1';
        break;
    case 2: 
        echo 'Your favorite number is 2'; 
        break;
    case 3: 
        echo 'Your favorite number is 3';
        break;
    case 4: 
        echo 'Your favorite number is 4'; 
        break;
    case 5: 
        echo 'Your favorite number is 5';
        break;
    case 6: 
        echo 'Your favorite number is 6'; 
        break;
    case 7: 
        echo 'Your favorite number is 7';
        break;
    default: 
        echo 'You do not have a favorite number';
}





?>