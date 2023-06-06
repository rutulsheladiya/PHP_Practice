<?php

$json_data = '
{
    "messages": 
    [
        {
            "from_email": "conf@larvol.com",
            "msg_id": "OUEt9XsZSl6xcLmcox2j1g.filterdrecv-5848969764-p6xmb-1-64390BD8-C.30",
            "subject": "AACR 2023 Conference Planner (Abstracts)",
            "to_email": "191203116001+31@asoit.edu.in",
            "status": "delivered",
            "opens_count": 9,
            "clicks_count": 0,
            "last_event_time": "2023-04-14T11:44:57Z"
        },
        {   
        "from_email": "conf@larvol.com",
        "msg_id": "OUEt9XsZSl6xcLmcox2j1g.filterdrecv-5848969764-p6xmb-1-64390BD8-C.30",
        "subject": "AACR 2023 Conference Planner (Abstracts)",
        "to_email": "191203116001+31@asoit.edu.in",
        "status": "delivered",
        "opens_count": 9,
        "clicks_count": 0,
        "last_event_time": "2023-04-14T11:44:57Z"  
        },
        {
            "from_email": "conf@larvol.com",
            "msg_id": "OUEt9XsZSl6xcLmcox2j1g.filterdrecv-5848969764-p6xmb-1-64390BD8-C.417",
            "subject": "AACR 2023 Conference Planner (Abstracts)",
            "to_email": "191203116001+418@asoit.edu.in",
            "status": "delivered",
            "opens_count": 7,
            "clicks_count": 0,
            "last_event_time": "2023-04-14T08:54:45Z"
        }
    ]
}';

// echo "<pre>";
// echo $json_data;

$data = json_decode($json_data, true);
echo "<pre>";
print_r($data);

echo "<br>"."====================================================================="."<br><br>";

$length = count($data['messages']);
echo "Length of Message Array : ".$length."<br><br><br><br>";


// using for & for each

echo "<br>"."<b><u>Print all JSON data</b></u>"."<br><br>";
for ($i = 0; $i < $length; $i++) {
    //   print_r($data['messages'][$i]);    
    foreach ($data['messages'][$i] as $key => $value) {
        echo  $key." => ".$value."<br>";
    }
    echo "<br><br>"."===="."<br><br>";
}



echo "<br>"."<b><u>Print Email ID from PHP Aarray.</b></u>"."<br><br>";
for ($i = 0; $i < $length; $i++) {
    //   print_r($data['messages'][$i]);    
    echo $data['messages'][$i]['to_email'];
    echo "<br>";
}





// using only for each
// foreach($data['messages'] as $message){
//     foreach($message as $key => $alldata){
//         echo $key ." => ".$alldata."<br>";
//     }
//     echo "======="."<br>";
// }

// print_r($data['messages'][0]);