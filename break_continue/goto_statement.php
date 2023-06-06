<?php
echo "Goto statement"."<br>";

// goto statement is used for jump to the specific label

echo "first";
echo "second";
goto test;
echo "third";
echo "fourth";

test:
echo "Rutul Sheladiya";

echo "<br>"."======================="."<br>";

for($x=1;$x<10;$x++){
    if($x==6){
       goto down;
    }
    echo "value of x : ".$x."<br>";
} 

down:
echo "goto statement called.."."<br>";
echo "hello world";
?>