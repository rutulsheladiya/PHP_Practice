<?php
echo "Comprision Operator"."<br><hr>";
$a=50;
$b =40;
var_dump($a==$b); 

echo "<br><hr>";
$a=50;
$b ="Rutul";
var_dump($a===$b);

echo "<br><hr>";
$a=50;
$b ="Rutul";
var_dump($a!=$b);

echo "<br><hr>";
echo "Spaceship Operator"."<br><br>";
// ahiya jo a ni value b ni value karta ochi haise to -1 return krse 
// ahiya jo a ni value b ni value same haise to 0 return krse 
// ahiya jo a ni value b ni value karta vadhare haise to 1 return krse 
$a=40;
$b =60;
var_dump($a<=>$b);
