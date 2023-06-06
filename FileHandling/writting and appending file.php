<?php
echo "writting and appending files";
echo "<br><hr>";
// // writting files in php
//  $fptr = fopen("files/text2.txt","w"); // jo text2.txt file exist nahi hoy to new create kari deshe and jo file haise and aema kai content hause to e content ne remove kari deshe
// //  fwrite($fptr,"this content is added using fwrite function");
// //  fwrite($fptr,"hello");
// //  fwrite($fptr,"world");
// fwrite($fptr,"hello man"); // text2.txt file ma je content padyo haise ne remove kari ne hello man content add kari deshe.  
// fclose($fptr);

echo "<br><hr><br>";

// appending files in php

// $test1 = fopen("files/text2.txt","a");
// fwrite($test1,"Third Line");


echo "<br><hr><br>";

// r+ ,w+ ,a+


// ex 1) r
// $fptr = fopen("test/first.txt","r");
// echo fread($fptr,filesize("test/first.txt")); // read the file

// ex 2) r+
// $fptr = fopen("test/first.txt","r+");
// fwrite($fptr,"add line");
// fseek($fptr,0);
// echo fread($fptr,filesize("test/first.txt"));

// ex 3) w
// $fptr = fopen("test/first.txt","w");
// fwrite($fptr,"cool");  
// fwrite($fptr,"cool1"); 
// fclose($fptr);


// ex 4) w+
// $fptr = fopen("test/first.txt","w+");
// fwrite($fptr,"Hey content add from write + command");
// fseek($fptr,0);
// echo fread($fptr,filesize("test/first.txt"));


//ex 5) a
// $fptr = fopen("test/second.txt","a");
// fwrite($fptr,"content add using append mode.");

//ex 6) a+
// $fptr = fopen("./test/second.txt","a+");
// fwrite($fptr,"added using append + mode");
// echo fread($fptr,filesize("test/second.txt"));
