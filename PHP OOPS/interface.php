<?php

// Multiple inheritence 
// this is not supported in PHP for that we have to use interface
// class A{
//     function sum($a,$b){
//         return $a+$b;
//     }
// }
// class B{
//     function sub($a,$b){
//         return $a-$b;
//     }
// }
// class C extends A,B{
//     function mul($a,$b){
//         return $a*$b;
//     }
// }
// $obj1 = new C();
// echo $obj1->sub(20,10);

// Interface
interface A{
    function sum($a,$b);
}
interface B{
    function sub($a,$b);
    function mul($a,$b);
}
class C implements A,B{
    function sum($a,$b){
        return "Sum Is : ".$a+$b."<br>";
    }

    function sub($a,$b){
        return "Sub Is : ".$a-$b."<br>";
    }

    function mul($a,$b){
        return "Mul Is : ".$a*$b."<br>";
    }
}

$obj1 = new C();
echo $obj1->sum(10,20);
echo $obj1->sub(100,20);
echo $obj1->mul(2,2);

