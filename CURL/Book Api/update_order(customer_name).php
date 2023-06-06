<?php
$url = "https://simple-books-api.glitch.me/orders/2iS0jELn_PUh8E7f7_uYx";
$accessToken =array(
    "Content-Type: application/json",
    "Authorization: Bearer 11caa731879116ace4b494ffc543115308d2c24b897c8cf83ba8e1bb4f10de4f" 
);
$data = array (
    "customerName" => "Dhenish Patel"
);
$jsonData = json_encode($data);
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"PATCH");
curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
curl_setopt($ch,CURLOPT_HTTPHEADER,$accessToken);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_error($ch);
curl_close($ch);

print_r($result);
?>