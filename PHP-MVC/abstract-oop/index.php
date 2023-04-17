<?php
include_once 'abstract/paymenttypes.abstract.php';
include_once 'classes/buyproduct.class.php';


$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
echo $buyProduct->payNow();
echo '<br>';

$buyProduct2 = new SellProduct();
echo $buyProduct2->payNow();
echo $buyProduct2->getPayment();
echo $buyProduct2->paid();
?>