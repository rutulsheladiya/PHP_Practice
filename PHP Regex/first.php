<?php
$str = "PHP is good language. php is fastest Language.";

// 1. search word php from string. if word found then it will return 1
$data = preg_match("/php/",$str);
// echo $data;
if($data){
    echo "pattern found";
}else{
    echo "pattern not found";
}

echo "<br><hr><br>";
// bydefault preg_match() case senstive function che je search kariye te exact string ma haise to 1(true) return karse nkr 0(false ) return krse
$str1 = "PHP is good language.is fastest Language.";
$data1  = preg_match("/php/",$str1);
if($data1){
    echo "pattern found";
}else{
    echo "pattern not found";
}
echo "<br><hr><br>";

// case sensitive ne dur karva mate apde modifier i no user kariye chiye je strine ne case insensitive banave che 
$str2 = "PHP is good language.is fastest Language.";
$data2  = preg_match("/php/i",$str1);
if($data2){
    echo "pattern found";
}else{
    echo "pattern not found";
}
echo "<br><hr><br>";

// now ex have je value search kariye aema searching value na mutiple occurence hoy to preg_metch() only first occurence j return karse badha karse nahi.
$str3 = "PHP is good language. PHPis fastest Language.";
$data3  = preg_match("/php/i",$str3);
if($data3){ 
    echo "pattern found";
}else{
    echo "pattern not found";
}
echo "<br><hr><br>";

// search kareki value na multiple occurence jova mate preg_match_all() use thay che. multiple occurence find kari ne aek array ma return karse.
$str4 = "PHP is good language. php is fastest Language.";
$data4  = preg_match_all("/php/i",$str4,$arr);
if($data4){
    echo "pattern found";
}else{
    echo "pattern not found";
}
echo "<pre>";
print_r($arr);
echo "<br><hr><br>";

// for multiple value search
$str5 = "PHP is good language. php is fastest Language.";
$data5  = preg_match_all("/php|language/i",$str5,$arr);
if($data5){
    echo "pattern found";
}else{
    echo "pattern not found";
}
echo "<pre>";
print_r($arr);
echo "<br><hr><br>";

// multiple value search krva mate apde | ni jagya ye [] pan use kari shakiye chiye
$str6 = "PHP is good language. php is fastest Language.";
$data6  = preg_match_all("/[a-p]/i",$str6,$arr); //  a thi p ni range ma jetla character avta haise te badha ne print kari deshe.
if($data6){
    echo "pattern found";
}else{
    echo "pattern not found";
}
echo "<pre>";
print_r($arr);
echo "<br><hr><br>";
