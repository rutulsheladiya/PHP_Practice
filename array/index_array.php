<?php
echo "Index Array"."<br><hr>";

$data = array("Laptop","Pc","Mouse","Keyboard","Mobile");
print_r($data);
echo "<br>";
for ($i=0;$i<count($data);$i++){
    if($i == count($data)-1){
        echo $data[$i];
    }else{
        echo  $data[$i].",";
    }
}





// // print_r($data);
// echo $data[0]. " " .$data[1]. " " .$data[2]. " " .$data[3]. " " .$data[4];

// echo "<br>"."================================================"."<br>";


// // indexed array
// echo "print index array data using for loop"."<br><br>";
// $data1 = array("Laptop","Pc","Mouse","Keyboard","Mobile",true,20,30);
// $length = count($data1);
// for ($i=0; $i < $length; $i++) { 
//      echo $data1[$i]." , ";
// } 

// echo "<br>"."===="."<br>";
// foreach($data1 as $result){
//     echo $result." => ";
//     echo gettype($result)." <br> ";
// }
// echo "<br><br>";
// echo gettype($result);
?>