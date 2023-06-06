<?php
// normally we will write and print the variable value like this

// class A{
//     public $name ="Rutul";
//     function showData(){
//        echo  $this->name;
//     }
// }
// $obj1 = new A();
// echo $obj1->name;
// $obj1->showData();

// ==========================================================================

// jo apde koi variable ne static banavi ye to function anadar tene use karva mate $this use na kari shakiye self::variable name use  karvu pade

// class A{
//     public static $name ="Rutul";
//     function showData(){
//        echo self::$name;
//     }
// }
// $obj1 = new A();
// $obj1->showData();

// ==========================================================================

// jo koi variable and method ne static banaviye to te method and variable without object apde call kari shakiye. 
// static property can be called without creating an instance.

// class A{
//     public static $name ="Rutul";
//     static function showData(){
//         echo self::$name;
//     }
// }
// call static variable.
// echo A::$name;

// call static method

// A::showData();

// we can also called the static method and variable using class object like this
// $obj1 = new A();
// echo $obj1->name;
// $obj1->showData();


// =================================================================================

// using constructor

// class A{
//     public static $name ="Rutul is called using constructor";
//     static function showData(){
//         echo self::$name;
//     }
//     function __construct(){
//      self::showData();   
//     }
// }
// $obj1 = new A();


// access the static variable and static method in sub class using inheritence using parent::varname/methodname

// class A{
//     public static $name ="Rutul Sheladiya";
//     static function showData(){
//         echo self::$name;
//     }
// }
// class B extends A{
//      function subfun(){
//         parent::showData();
//      }
// }
// $obj1 = new B();
// $obj1->subfun();

// apde b class no object banavi ne pan class a ni static method and variable ne call kari shakiye chiye
// $obj1 =  new B();
// $obj1->showData();

