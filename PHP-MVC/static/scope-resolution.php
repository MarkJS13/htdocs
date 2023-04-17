<?php
/// static
// static can be useful if you want to use mthods/properties of class object without instantiating.

class Class1 {
    const greet = 'Good Day!';

    public static $name = 'Good Day Man!';

    public static function access() {
        $test = 'Checkkkk';
        return $test;
    }


}

// echo Class1::greet;
// echo Class1::access();

class Class2 extends Class1 {
    public static $name = 'Hello';

    public static function container() {
        echo parent::$name;
        echo self::$name;
        
    }

}


//echo Class2::$name;
echo Class2::container();





?>