<?php
  $json_data =  file_get_contents('EmpData.JSON');

    $data = json_decode($json_data, true);
    echo "<pre>";
    // print_r($data);


    $length = count($data['messages']);
    echo $length;

// fetch all email from php array
for($i=0;$i<$length;$i++){
    echo $data['messages'][$i]['to_email']."<br>";
}


// print all array data
    // for($i=0;$i<$length;$i++){
    //     foreach($data['messages'][$i] as $key => $allData){
    //        echo $key . " => " . $allData."<br>";
    //     }
    //     echo "<br>"."-------------"."<br>";
    // }
?>