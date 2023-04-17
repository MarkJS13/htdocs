<?php

class Calc {
    private $num1;
    private $oper;
    private $num2;


    public function __construct(int $num1, string $oper, int $num2) {
        $this->num1 = $num1;
        $this->oper = $oper;
        $this->num2 = $num2;
    }

    public function calculate() {
        switch ($this->oper) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            default:
                echo 'invalid!';
                break;
        }
    }



}




?>