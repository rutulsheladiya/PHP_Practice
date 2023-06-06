<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://jsonplaceholder.typicode.com/users");
curl_setopt($ch,CURLOPT_POST,false);
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,false); // false hoy atle simpley print thay jashe badha data
// curl_exec($ch);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); // true apishu atle ae data ne simpley print nahi kare te aek variable ma return krse and apde te variable nee print karavvo padse.
$result = curl_exec($ch);
curl_close($ch);


echo "<pre>";
print_r($result);
echo "<br><hr>";
$result = json_decode($result,true);
print_r($result);
?>