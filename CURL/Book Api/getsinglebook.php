<?php
$ch = curl_init();
$url =  "https://simple-books-api.glitch.me/books/1";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);

$result = json_decode($result,true);
echo "<pre>";
print_r($result);
?>