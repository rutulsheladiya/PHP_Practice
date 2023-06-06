<?php
// abstract class ni andar non-abstract method hoy to pan using object apde tene access na kari sgakiye kem ke abstract class no object apde na banavai shakiye.

// Abstract class A{
//     public $name;
//     function data($n){
//       return $n;
//     }
// }
// $obj1 = new A();
// echo $obj1->data("Rutul");

// =======================================================

abstract class A{
    abstract protected function calc($a,$b);
    abstract protected function Mul($a,$b);
    function div($a,$b){
        return "Divison is : ".$a*$b."<br>";
    }
}
class B extends A{
    public function calc($a,$b){
        return "Sum is  : ".$a+$b."<br>";
    }
    public function mul($a,$b){
        return "Multiplication is : ".$a*$b."<br>";
    }
}
// a code error apde kem ke abstract class no apde object banavi shakiye nahi.
// $obj1 = new A();
// echo $obj1->calc(10,10);

$obj1 = new B();
echo $obj1->calc(10,10);
echo $obj1->mul(10,20);
echo $obj1->div(10,2);
?>