<?php
// abstract class cannot be instatiated
abstract class Visa {
    public function visaPayment() {
        return 'Perform a payment';
    }

    public function payNow() {
        return 'Perform a payment now';
    }

    // abstract public function getPayment();
    // abstract public function pay();
    // abstract public function getPayments(); 
    // if i run this code, it will throw an error because we need to define it in the class that implements this abstract. -- just like in interface


}

// $abst = new Visa();
// this is wrong because abstract class cant be instantiated
// it only use for extending 




?>