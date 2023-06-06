<?php
// function getData($name){
//   echo $name;
// }
// $data = "getData";
// $data("Rutul");

// PHP Anonymous functions
echo "<b>Anonymous functions</b>"."<br><br>";
$data = function($name,$age,$mobile){
   echo $name ."  ". $age ."  ".$mobile;
};
$data('Rutul',22,8320893080);

echo "<br><br>"."==========================================="."<br><br>";

echo "<b>Anonymous functions</b>"."<br><br>";

$details = function($id,$name,$age,$mobile,$city){
    $data = $id ."  ". $name ."  ". $age ."  ". $mobile ."  ".$city;
    return $data; 
}; 
$kk = $details(1,'Rutul',22,8320893080,'city');
echo $kk;
?>