<?php
echo "Associative Array"."<br><hr>";


$user_data = array(
     "Name" =>"Rutul",
     "Age"=>"22",
     "Mobile No" => "8320893080",
     "City" => "Surat",
     "County" => "India"
);



// using foreach loop
// foreach($user_data as $key => $data){
//   echo $key .  " => " . $data."<br>";   
// }

// using for loop

// $arr_key = array_keys($user_data); 
//    for($j=0;$j<count($arr_key);$j++){
//      echo $user_data[$arr_key[$j]] . " -- ";
// }

// var_dump($user_data); // give array all data with it's length
//print_r($user_data); // => print data inform of array
// echo gettype($user_data);   // => Datatype : array

// echo gettype($data); // => datatype : String
// $data = json_encode($user_data);
?>