<?php
echo "Control Structure" . "<br><hr>";

// 1)if 
// 2)if .... else ...
// 3) if elseif elseif else
echo "If Else Condition" . "<br><br>";
$age = 10;

if ($age > 18) {
    echo "Eligible For Vote";
} else {
    echo "Not Eligible For Vote";
}
echo "<br>"."=================================" . "<br><br>";




echo "If elseif elseif else Condition" . "<br><br>";
$marks=45;

if($marks>90 && $marks<100){
   echo "First Class";
}elseif($marks>70 && $marks<=90){
  echo "Second Class";
}elseif($marks>=35 && $marks<=70){
  echo "third class";
} else{
    echo "fail";
}



echo "<br>"."=================================" . "<br><br>";


echo "Switch Case" . "<br><br>";
$day="Mon";


switch($day){
    case "Mon":
        echo "It's an Monday.";
    break;
    case "Tue":
        echo "It's an Tuesday.";
    break;
    case "Wed":
        echo "It's an Wensday.";
    break;
    case "Thu":
        echo "It' an Thursday.";
    break;
    case "Fri":
        echo "It's and Friday";
    break;
    case "Sat":
        echo "It's an Saturday";
    break;
    case "Sun":
        echo "It's an Sunday";
    break;
    default:
       echo "Please Enter Valid Value";
}
