<?php

class House {
 
    private $name;
    private $type;
    private $years;

    public static $drinkingAge = 21;


    public function __construct($name, $type, $years) {
        $this->name = $name;
        $this->type = $type;
        $this->years = $years;
    }

 
 
}

 
//  print_r($john);
//  echo $john->getName();
 






 
?>