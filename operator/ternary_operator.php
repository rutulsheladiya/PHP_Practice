<?php
echo "Ternary Operator" . "<br><hr>";

$x = 10;
// ($x>20)?$z="Greater":$z="Smaller";
// echo $z;

// $z = ($x > 20) ? "Greater" : "Smaller";

$marks =50;
$test = ($marks>=80 AND $marks<100) ? "First Grade" :
(($marks>=60 AND $marks<80) ? "Second Grade" :
(($marks>=40 AND $marks<60) ? "Third Grade" :"Fail"));

echo $test;
