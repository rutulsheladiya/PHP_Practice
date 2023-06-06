<?php
$url = "https://simple-books-api.glitch.me/orders/Z0DLvgP_YaF4_GfT9j5kR";
$accessToken =array(
    "Authorization: Bearer 11caa731879116ace4b494ffc543115308d2c24b897c8cf83ba8e1bb4f10de4f" 
);

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"DELETE");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$accessToken);
$result = curl_exec($ch);
curl_close($ch);

print_r($result);
