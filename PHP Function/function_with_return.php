<?php

function detail($id,$name,$age,$mobileno){
   $fulldetail = $id ."  " . $name ."  " .  $age ."  " .  $mobileno;
   return $fulldetail;
}
//echo detail(1,"Rutul",22,8320893080); //direct return thayeli value ne print karavva echo krvu padse other option je function call thay che aene aek varible ma store kari and retuen thayeli value function call ni jagya ye avi jashe pchi te variable ne print karavi devani

$all_detail = detail(1,"Rutul",23,8320893080);
echo $all_detail;


echo "<br><br>"."======================================================"."<br><br>";

function marks($m1,$m2,$m3){
 $total = $m1+$m2+$m3;
 return $total;
}
// echo marks(40,40,40);
$total_marks = marks(46,80,90);
echo "Total : " .$total_marks."<br><br>";


function percentage($tot_marks){
   $average = $tot_marks/3;
   return $average;
}
// percentage($total_marks);
// echo percentage($total_marks);
$percentage = percentage($total_marks);
echo "Percentage : ".$percentage;
?>