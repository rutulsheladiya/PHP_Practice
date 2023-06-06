<?php
$header = array('Content-Type:application/json');
$data = array(
    "clientName" => "Mayur",
    "clientEmail" => "Mayur@gmail.com"
);
$jsonData = json_encode($data);
// print_r($jsonData);
// die();
$url = "https://simple-books-api.glitch.me/api-clients";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
$result = curl_exec($ch);
curl_close($ch);

print_r($result);
?>