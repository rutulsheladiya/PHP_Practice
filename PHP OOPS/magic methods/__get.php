<!-- magic method called automatically when class object is created. basically it will called on some conditions -->

<!-- __get() it is called when we try to access private member or undefined member outside of the class -->
<?php
class A{
    private $name = "Rutul Sheladiya";
    function __get($value){
        echo "You are trying to acess private or undefined property ($value)";
    }
}

$obj = new A();
// try to acess private property
echo $obj->name;

// try to access undefined property
// $obj->age;
?>