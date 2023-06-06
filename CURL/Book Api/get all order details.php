<?php
$url = "https://simple-books-api.glitch.me/orders";
// $accessToken = "11caa731879116ace4b494ffc543115308d2c24b897c8cf83ba8e1bb4f10de4f";
$token = array(
    "Authorization: Bearer 11caa731879116ace4b494ffc543115308d2c24b897c8cf83ba8e1bb4f10de4f" 
);

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$token);
$result = curl_exec($ch);
curl_close($ch);


// for print the data in the form of array
// var_dump($result); // return the data in form of string
// echo gettype($result); // return the data in form of string
// echo $result; //je return kare aenu format json che but teno datatype string j che. 
//print_r($result);  //je return kare aenu format json che but teno datatype string j che. 
$result = json_decode($result,true);
echo "<pre>";
print_r($result);
?>