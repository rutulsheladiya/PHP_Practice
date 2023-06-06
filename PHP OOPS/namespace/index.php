<?php
include 'first.php';
include 'second.php';
function wow(){
    echo "wow called from index.php file"."<br>";
}
// create object product class in first.php file
$obj1 = new first\product();
$obj1->showData();
// $obj2 = new second\product();
// first\wow(); it will called the first.php file wow method otherwise btdefault it will call the index file wow function.
?>