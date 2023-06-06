<?php
echo "Data Types"."<br>"."<hr>";

echo "string datatype"."<br><br>";
$test1 = "Rutul Sheladiya"."<br>";
echo $test1;
var_dump($test1);
  
// ==================================================
echo "<br><br>"."Integer datatype"."<br><br>";

$test2 =1002;
echo $test2."<br>";
var_dump($test2);
// ==================================================
echo "<br><br>"."Float datatype"."<br><br>";

$test3 =567.980;
echo $test3."<br>";
var_dump($test3);

// ==================================================
echo "<br><br>"."Boolean datatype"."<br><br>";

$test4 =true;
echo $test4."<br>";
var_dump($test4);

// ==================================================
echo "<br><br>"."Array datatype"."<br><br>";

$test4 =array("Laptop","Pc","Bike",500);
echo $test4[2]."<br>";
var_dump($test4);



// ==================================================
echo "<br><br>"."Null datatype"."<br><br>";

$test5 = NULL;
echo $test5."<br>";
var_dump($test5);
?>