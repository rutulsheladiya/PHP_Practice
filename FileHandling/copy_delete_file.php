<?php
// 1) copy(source file , destfile)
// copy("copy1.txt","cpy.txt");

// 2) unlink(filename)
// unlink("cpy.txt");

// 3) file_get_contents("filename")
// $data = file_get_contents("files/getcontent.html");
// echo $data;

// 4)  feof() => jya sudhi file na end sudhi na pahoche tya sudhi chalya rakhse loop.
//  $fptr = fopen("files/getcontent.html","r");
// while(!feof($fptr)){
//    echo fgets($fptr);
// }

// 5) readfile() => without echo apde file ne print karavi skaiye ,
//readfile("copy1.txt"); 
//echo readfile("copy1.txt"); // file no content + length ape

// 6) file_get_content("filename") =>without echo apde file_get_contents() ne print na karavi shakiye
//echo file_get_contents("copy1.txt"); 

// readfile("files/script.js");
// echo file_get_contents("files/script.js");

//7) file_exist(filename) => jo file exist karti haise to true return krse nkr false krse.
// file_exist()
// if(file_exists("copy1.txt")){
//     echo "true";
// }else{
//     echo "flase";
// }
?>