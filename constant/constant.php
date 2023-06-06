<?php
echo "Constant Variable"."<br><hr>";

// define constant variable
define("name","Rutul");
echo "Constant variable called : ".name;

echo "<br>"."=========================================="."<br>";

//  we can no change the value of constant variable (warning apse...)
// define("name","Ravi");
// echo name;


echo "<br>"."=========================================="."<br>";

// casesensitivity
define("num",50);
echo "Number Is : ".num."<br>";

echo num;
echo "<br>"."=========================================="."<br>";


// constantr variable are global we can use it anywhere inside function etc...
define("mobile",8320893080);
function get_data(){
    echo "Constant variable called inside Function : ".mobile;
}
get_data(); 


?>