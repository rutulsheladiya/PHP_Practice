<?php


echo "<br><br>" . "PassBy Value..." . "<br><br>";
function first($value)
{
    $value = "Sheladiya";
}

$name = "Rutul";
first($name);
echo $name;

echo "<br><br>" . "===============================================" . "<br><br>";


echo "<br><br>" . "PassBy Reference (addr) ..." . "<br><br>";
function second(&$fname)
{
    //$fname = "Sheladiya";
    $fname .= "Sheladiya";
}
$firstname = "Rutul";
second($firstname);
echo $firstname;

echo "<br><br>" . "===============================================" . "<br><br>";

echo "<br><br>" . "PassBy Reference (addr) ..." . "<br><br>";
function third(&$num2)
{
    //$num2 = $num2+ 100;
    $num2 = 100;
}
$num1 = 50;
third($num1);
echo $num1;
