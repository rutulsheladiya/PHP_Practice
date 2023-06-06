<?php
// destructor function will called automatically at the end of the script. basically it will execute or call when script stopped or exited.

class A{
    function __construct(){
        echo "Constructor Called.."."<br>";
    }
    function first(){
        echo "First method called in class A"."<br>";
    }

    function second(){
        echo "Second method called in class A"."<br>";
    }

    function __destruct(){
        echo "Descructor method called...........";
    }

    function third(){
        echo "Third method called in class A"."<br>";
    }
}

$obj1 = new A();
$obj1->first();
$obj1->second();
$obj1->third();


// actual use
// class Student
// {
//     private $conn;
//     function __construct()
//     {
//         $this->conn = mysqli_connect();
//     }

//     function first()
//     {
//         echo "First method called in class A" . "<br>";
//     }

//     function second()
//     {
//         echo "Second method called in class A" . "<br>";
//     }

//     function __destruct()
//     {
//         mysqli_close($this->conn);
//     }
// }
// $obj1 = new Student();
// $obj1->first();
// $obj1->second();
