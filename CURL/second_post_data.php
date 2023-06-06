<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://jsonplaceholder.typicode.com/posts");
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,"userId=1001&title=Helloworld&body=hey jsonplaceholder");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);


echo "<pre>";
print_r($result);
echo "<br><hr>";
$result = json_decode($result);
print_r($result);
?>