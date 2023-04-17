<?php

class BuyProduct extends Visa{
    public function getPayment() {
        return $this->visaPayment();
    }

    public function pay() {
        return $this->payNow();
    }
}


class SellProduct extends Visa{
    public function pay() {
        return $this->payNow();
    }

    public function getPayment() {
        return $this->visaPayment();
    }

    public function paid() {
        return 'you are paid';
    }
}


?>