<?php 
echo "Insert Array Element after creating array"."<br><br><hr>";
// insert element in index array after creating array
$arr4 = array('a','b','c','d');
echo "<pre>";
print_r($arr4);
$arr4[0]="Rutul";
$arr4[4]="Ravi";
$arr4[5]="Purvish";
echo "<pre>";
print_r($arr4);

// insert element in Associative array after creating array
$arr5 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "<pre>";
print_r($arr5);
$arr5['Rutul'] = "22";
$arr5['Ravi'] = "56";
$arr5['Mahek'] = "30";

echo "<pre>";
print_r($arr5);

$cars = array (
    "First"=> array("Volvo",22,18,40,30),
    "Second"=> array("BMW",15,13),
    "Third"=> array("Saab",5,2),
    "Fourth"=> array("Land Rover",17,15)
  );
print_r(array_keys($cars));
?>