<?php
$password = "Hello World";
echo "Using md5()"."<br><br><br>";
echo "Normal Password Is : ".$password."<br><br>";

echo "md5 32 bit hexa Format password : ".md5($password)."<br><br>";
echo "md5 16 bit Binary Format password : ".md5($password,true)."<br><br>";

echo "<br><br><hr>";

echo "Using sha1()"."<br><br><br>";
echo "sha1 40 bit hexa format paswword : ".sha1($password)."<br><br>";
echo "sha1 20 bit Binary Format password : ".sha1($password,true)."<br><br>";

echo "<br><br><hr><hr>";

if(md5($password) == "b10a8db164e0754105b7a99be72e3fe5"){
   echo "Password match";
}else{
    echo "Password not match";
}
?>