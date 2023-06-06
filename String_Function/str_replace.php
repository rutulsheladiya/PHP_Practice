<!-- NOTE : Using str_replace() we can also replace the array values  -->


<?php
// 1) str_replace() => replace string. it is case sensitive.
echo "str_replace() function"."<br><br>";

// with string 
$str1 = "Hello Rutul Sheladiya,hello everyone , hello all good ?";
echo "<b>Original String : </b>".$str1."<br><br>";

echo str_replace("hello","Hey",$str1)."<br><br>";

// replace string multiple value
$find1 = array("hello","Sheladiya");
$replace1 = array("Hey","Patel");
echo str_replace($find1,$replace1,$str1);

// -----------------------------------------------------------------

// with array
$Arr1 = array("red","yellow","pink","black","blue");
echo "<pre>";
print_r($Arr1);

// replace array multiple value
$find2 = array("red","yellow");
$replace2 = array("marun","white");
print_r(str_replace($find2,$replace2,$Arr1));
echo "<br><br><hr>";



//2) str_ireplace() => same as str_replace but it is case-insensitive


// with string
$str2 = "Hello Rutul Sheladiya,hello everyone , hello all good ?,Rutul";
echo "<b>Original String : </b>".$str2."<br><br>";

echo str_ireplace("hello","Hey",$str2)."<br><br>";


// replace multiple value of string
$find3 = array("HELLO","RUTUL");
$replace3 = array("Hey","Patel");
echo str_ireplace($find3,$replace3,$str2)."<br><br>";

// --------------------------------------------------------------

// with array
$Arr2 = array("red","yellow","pink","black","blue");
echo "<pre>";
print_r($Arr2);
print_r(str_ireplace("RED","white",$Arr2));

// replace array multiple value
$find4 = array("PINK","black","BLUE");
$replace4 = array("cool","cool","cool");

print_r(str_ireplace($find4,$replace4,$Arr2));
?>