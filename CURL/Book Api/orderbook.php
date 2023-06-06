<?php
$accessToken = "11caa731879116ace4b494ffc543115308d2c24b897c8cf83ba8e1bb4f10de4f";
$header = array(
     "Content-Type: application/json",
     "Authorization: Bearer $accessToken" 
);
$order = array(
     "bookId" => 2,
     "customerName" => "Rutul".rand()
);
$data = json_encode($order);
$url = "https://simple-books-api.glitch.me/orders";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
$result = curl_exec($ch);
if(curl_errno($ch))
{
     $error_msg = curl_error($ch);
     echo $error_msg;
}
curl_close($ch);


$result = json_decode($result,true);
echo "<pre>";
print_r($result);
?>