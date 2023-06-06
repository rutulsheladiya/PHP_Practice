<?php
namespace first;
// namespace first{}
class product{
    function __construct(){
        // echo "First.php file product class constructor called."."<br>";
        $obj3 = new \second\product(); // jyare first.php file no object banse through trh name space tyare a class nu constructor
        // call thase and a constructor call thase atle second.php file me je constuctor che ae call thase.
    }

    function showData(){
        echo "show data called of first.php page"."<br>";
    }
}
function wow(){
    echo "wow called from first.php file"."<br>";
}
?>