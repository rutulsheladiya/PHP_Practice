<?php
// constructor called automatically when class object is created.
// when we have to intilize the varible value at that time we can use the constructour otherwise when we are create object of that class at that time we have to assign the vatiable value through an object like this $obj1->name ="Rutul";

class Student
{
    public $name, $age, $mobileno;
    function __construct($name="Purvish",$age=23,$mobileno=9090987653){
        $this->name = $name;
        $this->age = $age;
        $this->mobileno = $mobileno;
    }

    function showData(){
        echo "Name : ".$this->name ." Age : ".$this->age ." Mobile No : " .$this->mobileno."<br>";
    }
}
$obj1 = new student("Rutul Sheladiya",22,8320893080);
$obj1->showData();
$obj2 = new student("Ravi Mandani",34,1234567890);
$obj2->showData();
//default value
$obj3 = new student();
$obj3->showData();