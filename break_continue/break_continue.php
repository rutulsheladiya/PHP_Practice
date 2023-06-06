<?php
echo "Break Continue Statement" . "<br><hr>";

echo "Continue Statement"."<br><br>";
for($x=1;$x<=10;$x++){
  if($x==3){
    continue;
  }
   echo "Value of X : ".$x."<br>";
}

echo "<br>"."Break Statement"."<br><br>";
for($x=1;$x<=10;$x++){
   if($x==3){
     break;
   }
   echo "Value of X : ".$x."<br>";
}
?>