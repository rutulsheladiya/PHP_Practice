<?php
echo "File Handling"."<hr><br>";

// 1) readfile(path and file name) => this function will read the content of the file and also return the total number of character.
$a = readfile("files/test.txt");
echo $a;      // it will read the content of thr file and return the total number of character.

echo "<br><br>";
//readfile("files/1.jpg"); // read the image file and return it in binary format.
readfile("files/test.txt"); // direct a function lakvathi file no badho content return krse with out number of char. it will print the content in output buffer.

echo "<hr><br><br>";


//2) fopen(filename with path,mode)
$fptr = fopen("files/test.txt","r");
echo $fptr."<br>";               // it will print this Resource id #4
// echo var_dump($fptr);
if($fptr){
    echo "file find";
}else{
    echo "file not found";
}
echo "<hr><br><br>";


//3)fread("filename with path",length) => file no path api ne jetli length apshu tetla character print karse.
// jo file ma character che kbr na hoy length kbr na hoy to filesize(filename) a function thi file ma toral ketla character che te malse.

// $content = fread($fptr,filesize("files/test.txt"));
// echo $content;

echo "<hr><br><br>";


//4) fgets()  => read the first line of the file file
$data = fopen("files/test.txt","r");
// echo fgets($data);  //only firstline print karse and pointer first position upr avse
// echo fgets($data);  // print the second line and pointer second position par avse.
// echo fgets($data);

while ($a = fgets($data)){
    echo $a."<br>";
}    // file ni line by line badhi line read karse and print karse.
echo "End of file";
fclose($data);

echo "<hr><br><br>";



//5) fgetc() file no first character read karse. excecute file character by character.
$data1 = fopen("files/test.txt","r");
//echo fgetc($data1);  // return the first character of string and move the pointer to the first position 
//echo fgetc($data1); // return second character of string and move the pointer to the Second position 
//echo fgetc($data1); // return third charater of string and move the pointer to the third position

// while($a = fgetc($data1)){
//     echo $a."<br>";
// } // one by one badha character print karse jya sudhi tene false na male tya sudhi character print krse. ex: 5 chcrater che 5 var echo krishu and 6th var echo kari ne vardump() check karshu to te bool false return krsae.
// echo "End of file";

// jya sudhi . na male tya sudhi na badha character print karva mate.
while($a = fgetc($data1)){
    echo $a."<br>";
    if($a == "."){
        break;
    }
}  // jya sudhi . nai male tya sudhi badha charater return karse one by one.
fclose($data1);
echo "<hr><br><br>";
?>