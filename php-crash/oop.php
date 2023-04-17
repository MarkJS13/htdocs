<?php


class User {

    // (public) properties that are belong to class
    public $name;
    public $email;
    public $password;
    public $age;

    // constructor is a method that runs when an object is created.

    public function __construct($name, $email, $password, $age) { // like constructor function in javascript.
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->age = $age;
    }

    // method is a function that belongs to a class

    function set_name($name) { // setter
        $this->name = $name;
    }


    function get_name() {
        return $this->name;
    }

};


//Instantiate a user object
$user1 = new User('mark', 'markjserrano', 'abcde', 23);
$user2 = new User('joseph', 'serranogmail.com', 'efghijk', 32);
//$user1->name = 'Brad';

//var_dump($user1);
echo '<br>';
//var_dump($user2);



class Employee extends User {
    public $title;

    public function __construct($name, $email, $password, $age, $title) {
        parent::__construct($name, $email, $password, $age); // is like super()
        $this->title = $title;    
    }

    public function get_title() {
        return $this->title;
    }


}

$employee = new Employee('bert', 'andoksgmail.com', 'abcds', 23, 'avatar');

var_dump($employee);

echo $employee->get_title();

?>