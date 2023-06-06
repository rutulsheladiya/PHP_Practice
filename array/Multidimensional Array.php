<?php
echo "Multidimensional Arrays..." . "<br><hr>";

// array containe more than one array is called Multidimensional Arrays
$details = array(
   array("Rutul", 22, 8320893080, "India"),
   array("Ravi", 23, 789076080, "India"),
   array("Krina", 27, 987656789, "USA"),
   array("Mansi", 60, 7689098765, "UK")
);

$length = count($details);

// Multidimensional Arrays with index array
echo "<br><br>"."<b><u>Multidimensional Arrays with index array Fetch data using foreach loop</u></b>"."<br><br>";
for($i=0;$i<$length;$i++){
   // print_r($details[$i]);
   foreach($details[$i] as $key => $data){
     echo   $key ." => ".$data."<br>";
   }
   echo "<br>"."==========="."<br>";
}

echo "<br><br>"."<b><u>Multidimensional Arrays with index array Fetch data using For loop</u></b>"."<br><br>";

for ($row = 0; $row < $length; $row++) {
   echo "<b>Row Number : $row</b>";
   echo "<ul>";
   for ($col = 0; $col < count($details[$row]); $col++) {
      echo "<li>" . $details[$row][$col] . "</li>";
   }
   echo "</ul>";
}




echo "<br>" . "=================================================================" . "<br><br>";


//  Multidimensional Arrays with associative array

$customer_details = array(
   array(
      "Id" => "1",
      "Name" => "Rutul",
      "Mobile" => "8320893080",
      "City" => "Surat",
      "Email" => "rutulsheladiya2@gmail.com"
   ),
   array(
      "Id" => "2",
      "Name" => "Ravi",
      "Mobile" => "9090909087",
      "City" => "Surat",
      "Email" => "Ravipatel@gmail.com"
   ),
   array(
      "Id" => "3",
      "Name" => "Purvish",
      "Mobile" => "7676789098",
      "City" => "Ahmedabad",
      "Email" => "purvishDhameliye@gmail.com"
   ),
   array(
      "Id" => "4",
      "Name" => "Sumit",
      "Mobile" => "8900987680",
      "City" => "Vapi",
      "Email" => "Sumitrajput23@gmail.com"
   )
);
echo "<pre>";
print_r($customer_details);
$size = count($customer_details);

// using foreach loop
echo "<br><br>"."<b><u>Multidimensional Arrays with associative array Fetch data using foreach loop</u></b>"."<br><br>";
for ($i = 0; $i < $size; $i++) {
   // echo "<pre>";
   // print_r($customer_details[$i]);
   foreach($customer_details[$i] as $key => $result){
      echo $key ." => ".$result."<br>";
   }
   echo "<br>"."==========="."<br>";
}


echo "<br><br>"."<b><u>Multidimensional Arrays with associative array Fetch data using for loop</u></b>"."<br><br>";

echo "<pre>";
for ($i = 0; $i < $size; $i++) {
   $arr_key = array_keys($customer_details[$i]); 
   for($j=0;$j<count($arr_key);$j++){
     echo $customer_details[$i][$arr_key[$j]] . " ";
   }
   echo "<br>";
}

//print_r(array_keys($customer_details[$i]));

// echo "<pre>";
// print_r($customer_details);
