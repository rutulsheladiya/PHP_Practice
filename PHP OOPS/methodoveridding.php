<?php
// variable overloading
// class A {
//   public  $name = "Rutul Sheladiya"."<br>";
// }
// class B extends A{
//  public $name = "Ravi Mandani"."<br>";
// }


// $obj1 = new A();
// echo $obj1->name;
// $obj2 = new B();
// echo $obj2->name;

// Method Overdidding 
class A
{
    public function calc($a, $b)
    {
        return "Sum Is : " . $a + $b."<br>";
    }
}
class B extends A
{
    // public function calc($a, $b)
    // {
    //     return "Multiplication Is : " . $a * $b."<br>";
    // }
}
// calling method of class A
$obj1 = new A();
echo $obj1->calc(10,10);

// calling method of class B
$obj2 = new B();
echo $obj2->calc(30,40);

// B class don't have any method then using object of class B we can directly acess the method of class A because of inheritence.
// echo $obj2->calc(30,40);
