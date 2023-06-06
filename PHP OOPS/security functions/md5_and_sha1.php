<!-- 
=>md5(string,true/false) Default is false  (message digesty 5) 
- true means te string ne 16 character binary format ma string ne convert karse.
- false means te string ne 32 character hexa fromat ma string ne convert karse.

=> sha1(string,true,false) Default False (secure hash algorith)
- true means te string ne 20 character binary format ma conver karse string ne.
- false means string ne 40 character hexadecimal format ma convert karse string new 
-->

<?php
// md5
// store password in 32charater hexadecimal format. jo md5($str,true) apishu to 16 character binary format ma convert karse
$str = "hello@world@123";
$hash = md5($str);
echo $hash."<br>";

if(md5($str) == $hash){
    echo "password match";
}else{
    echo "password Not match";
}

echo "<br><br><hr><hr><br><br>";

// sha1
// => it will convert the string into 20 character binary fromat
$str1 = "hello@world@123";
$hash = sha1($str1,true);
echo $hash."<br>";

if(sha1($str1,true) == $hash){
    echo "password match";
}else{
    echo "password not match";
}
?>
