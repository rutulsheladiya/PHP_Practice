<?php
echo "Time Functions";
echo "<br><br><hr><br>";
date_default_timezone_set("Asia/Kolkata");


echo "Current Hour Is  : ".date("h"); //=> return hour in  01 to 12 hour format with 0 (01 to 09)
echo "<br>";
echo "Current Hour Is  : ".date("H"); // retuen hour in 00 to 24 hour format with 0  (01 to 09)
echo "<br>";
echo "Current Hour Is  : ".date("g"); //=> return hour in  1 to 12 hour format withour 0
echo "<br>";
echo "Current Hour Is  : ".date("G"); // retuen hour in 00 to 24 hour format without 0 
echo "<br><br><hr><br>";

echo "Current Minute : ".date("i"); // return Minute

echo "<br><br><hr><br>";

echo "Current Second : ".date("s"); // return Minute

echo "<br><br><hr><br>";

echo "Current Meredian : ".date("A"); // return Minute

echo "<br><br><hr><br><br><br>";

echo "Date And Time : ".date("d/F/Y h:i:sA e");  // return current date and time with timezone

echo "<br><br><hr><br>";

echo "Current Time : ".date("h:i:sa e");
?>