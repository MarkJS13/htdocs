<?php


include_once 'classautoloader.includes.php';

$id = $_GET['id'];

$cart = new Cart_Contr();
$rowCart = $cart->getCart($id);

//echo $rowCart[0]['shoes_name'];


if(isset($_SESSION['kyrie-1'])) {
    print_r($_SESSION['kyrie-1']);
}

if(isset($_SESSION['kyrie-2'])) {
    print_r($_SESSION['kyrie-2']);
}
if(isset($_SESSION['kyrie-3'])) {
    print_r($_SESSION['kyrie-3']);
}
if(isset($_SESSION['kyrie-4'])) {
    print_r($_SESSION['kyrie-4']);
}




?>

<a href="../index.php">back</a>
<a href="remove.includes.php">clear</a>