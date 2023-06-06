<!-- 
=> filter_var(string,sanitization_type) function is use to validate or sanitize the user input.
* sanitization type *
1) filter_validate_email
2) filter_sanitize_email
3) filter_sanitize_string
4) filter_sanitize_URL
5) filter_validate_int

-->
<?php
$email = "rutul!@heladiya2@gmail.com";
$result = filter_var($email,FILTER_VALIDATE_EMAIL);
var_dump($result); //=> if email is valid it will return true otherwise return false

echo "<br><br><hr><br><br>";


$email = "rutu//l(h)(ela)diya2@gmail.com";
$result = filter_var($email,FILTER_SANITIZE_EMAIL);
echo $result; //=> remove inliggle character from email like ()()/

echo "<br><br><hr><br><br>";

$url = "https://www.w3sc        hools.com/js/t         ryit.asp?f il ena e=t ryjs_ a rr ay_splice";
$result = filter_var($url,FILTER_SANITIZE_URL);
echo $result; //=> remove inligle character from string like space etc..

echo "<br><br><hr><br><br>";

$str ="<b><i>Rutul Sheladiya</i></b>";
echo $str."<br>";
$result = filter_var($str,FILTER_SANITIZE_STRING);
echo $result; //=> remove html tags from the string like <b><i>

echo "<br><br><hr><br><br>";


$price = 30.45;
$result = filter_var($price,FILTER_VALIDATE_INT);
var_dump ($result); // => jo value integer nai hoy to false return karse
?>