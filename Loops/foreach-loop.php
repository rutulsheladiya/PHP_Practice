<?php
// index array
$name = array("Rutul","Ravi","Purvish","Rahul");
var_dump($name);

echo "<br>"."==============================================="."<br>";

foreach($name as $data){
  echo $data."<br>";
//   $alldata= $data."<br>";
//   echo $alldata;
  
}
// give the data type of $data  => $data type is String
echo gettype($data);



echo "<br>"."====================================================================================================="."<br>";


// associative array
$userData = array(
    "Rutul" => "22",
    "Purvish"  => "23",
    "Ravi" => "12",
    "Mayur" => "50" 
);

foreach($userData as $key => $details){
   echo $key ." => ". $details."<br>";
}
echo gettype($details);


echo "<br>"."====================================================================================================="."<br>";


// Multidimentional  array
$employees = array (
    array("Name" => "Harry", "Age" => 25, "Department" => "Management"), 
    array("Name" => "Jack", "Age" => 31, "Department" => "Developer"),
    array("Name" => "Harry", "Age" => 35, "Department" => "Developer")
);

foreach($employees as $emplopyee){
  foreach($emplopyee as $key => $emp){
      echo $key ." => ". $emp."<br>";
  }
}
echo gettype($emplopyee)."<br>";
echo gettype($emp);
?>  