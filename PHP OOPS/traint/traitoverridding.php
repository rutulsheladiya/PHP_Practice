<?php
// multiple tarit ma same function che to jyare tene class ma use karishu to compiler ne confucion thase kaya trait nu kayu function use thase.
// aa main problem che error apse a problem ne solve karva mate....

// trait t1{
//     function sayHello(){
//         echo "Say hello from t1 trait";
//     }
// }

// trait t2{
//     function sayHello(){
//         echo "Say hello from t2 trait";
//     }
// }

// class A{
//     use t1,t2;
// }
// $obj1 = new A();
// $obj1->sayHello();

//=====================================================

// trait overridding solution
// trait t1{
//     function sayHello(){
//         echo "Say hello from t1 trait"."<br>";
//     }
// }

// trait t2{
//     function sayHello(){
//         echo "Say hello from t2 trait"."<br>";
//     }
// }

// class A{
//     use t1,t2{
//         t1::sayHello insteadOf t2;
//         t2::sayHello as sayHi;
//     }
// }
// $obj1 = new A();
// $obj1->sayHello();
// $obj1->sayHi();



// trait with multiple methods

// 1) traint ma je method banavi te j method class A ma che and class A ae B sathe inherit thayelo che to 
// jo class B no object banavi ne sayHello() method call krishu to trait ni method call thase kem ke trait nt vadhare 
// priority male execute thava mate.

// 2) example trait ma aek method banavi che sayHello() ae same name ni method. ae j same name ni method apde class A and B ma banaviye chiye.
// and trait ne apde class B ma use kariye chiye and class B ma Class A inherit kariye chiye.
// to class B pase total same name ni 3 mthod che 1st trait ni , 2nd class A ni and 3rd potani.
// to class B no object banavi ne sayHello() call karishu to class B ni sayHello() call thase kem ke pela class B ni sayHello() ne vadhare priority maslse thethi.

trait t1{
    function sayHello(){
        echo "Hello From Trait t1";
    }
}

class A{
    function sayHello(){
        echo "Hello From Class A SayHello()";
    }
}
class B extends A{
    use t1;
    function sayHello(){
      echo "Hello From Class B SayHello()";
    }
}
$obj1 = new B();
$obj1->sayHello();
 ?>