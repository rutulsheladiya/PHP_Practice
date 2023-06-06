<?php
$url = "https://simple-books-api.glitch.me/orders/7bz0bn6nsknEc-CzTZzuh";
$accessToken =array(
    "Authorization: Bearer 11caa731879116ace4b494ffc543115308d2c24b897c8cf83ba8e1bb4f10de4f" 
);
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$accessToken);
$result = curl_exec($ch);
curl_close($ch);

// for print the data in the form of array
// print_r($result);
$result = json_decode($result,true);
echo "<pre>";
print_r($result);
?>