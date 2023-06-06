<?php 
echo "Variable Scope..."."<br>"."<hr>";
// globle scope
echo "Globle Scope..."."<br>";
$x =100;
function test(){
    echo "Inside Function Access X: ".$x;
}
test();
echo "Outside Function Access X : ".$x;
echo "<br>"."<hr>";

// ==============================================

// local scope
echo "Local Scope....."."<br>";
function second(){
    $y =50;
    echo "Inside Function Variable Y called : ".$y;
}
second();
echo "Outside Function Variable Y Called : ".$y;

echo "<br>"."<hr>";

// ==============================================





// globle keyword => used for access globle variabl inside function

echo "Globle Keyword....."."<br>";

$a=10;
$b=20;

function sum(){
    global $a,$b;
    $a = $a+$b;
}
sum();
echo "Called Variable C Oustside function : ".$a;
echo "<br>"."<hr>";

// ==============================================

// Static Keyword in PHP
echo "Static Keyword....."."<br>";
function static_test(){
    static $z=0;
    echo $z."<br>";
    $z++;
}
static_test();
static_test();
static_test();
?>