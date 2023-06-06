<?php
echo "<br><br>" . "String Functions..." . "<br><hr>";

// 1) Strlen => return string length.
$str1 = "Yahoo Baba";
echo "String Lenght Is : " . strlen($str1);
echo "<br><br><hr>";

// 2) str_word_count(string,return) => count the total number of word from string. (return => 0,1,2)
$str2 = "Yahoo Baba";
echo "String Word Count is : " . str_word_count($str2) . "<br>";

$data1 = str_word_count($str2, 1);
echo "<pre>";
print_r($data1);
echo "</pre>";

$data2 = str_word_count($str2, 2);
echo "<pre>";
print_r($data2);
echo "</pre>";

echo "<br><br><hr>";


// 3) substr_count(string,substring,start,length) => substring means searching element. this function will return how many time searching element will occur in string
$str3 = "Hello world. The world is nice world";

echo "String length is : " . strlen($str3) . "<br>";
echo "Hello Occur in String is : " . substr_count($str3, "world") . "<br>";


echo "Hello Occur in String is : " . substr_count($str3, "world", 13) . "<br>";
echo "Hello Occur in String is : " . substr_count($str3, "world", 13, 9);
echo "<br><br><hr>";


// 4) substr(string,start,length) => this function extract the specific part of the string...
$str4 = "Hello World";

echo "Substring Is : " . substr($str4, 0) . "<br>";
echo "Substring Is : " . substr($str4, 0, 10) . "<br>";
echo "Substring Is : " . substr($str4, 1, 8) . "<br>";
echo "Substring Is : " . substr($str4, 0, 5) . "<br>";
echo "Substring Is : " . substr($str4, 6, 5) . "<br>";
echo "Substring Is : " . substr($str4, 2, 5) . "<br>";


echo "<br>" . "<b>Negative</b>" . "<br>";
echo "Substring Is : " . substr($str4, 0, -1) . "<br>";
echo "Substring Is : " . substr($str4, -10, -2) . "<br>";
echo "Substring Is : " . substr($str4, 0, -6) . "<br>";
echo "Substring Is : " . substr($str4, -10, -2) . "<br>";

echo "<br><br><hr>";


// 4) strpos(string,findstr) => it will find the position and return the  first occurence of searching string. it is case sensitive. ( captial search kriye to string ma capital haise to j return krse nkr 0 return krse)
echo "<b>strpos() function</b>"."<br><br>";
$str5 = "I love php, I love php too!";

echo "Strpos : " . strpos($str5, "php") . "<br>";

echo "<br><br><hr>";

// 5) stripos(string,findstr) => it will find the position and return the first occurence of searching string. it is case-insensitive. ( captial search kriye to string ma capital  ke small je haise teni position with first occurence return krse)
echo "<b>stripos() function</b>"."<br><br>";
$str6 = "I love php, I love php too!";
echo "Stripos : " . stripos($str6, "PHP") . "<br>";
echo "Stripos : " . stripos($str6, "i");

echo "<br><br><hr>";

// 6) strrpos(string,findstr) => it will find the position and return the last occurence of searching string. is case sensitive. ( captial search kriye to string ma capital haise to j return krse nkr 0 return krse)
$str7 = "I love php, I love php too!";
echo "Strrpos : " . strrpos($str7, "php") . "<br>";
echo "Strrpos : " . strrpos($str7, "I");
echo "<br><br><hr>";


// 7) strripos(string,findstr) => it will find the position and return the last occurence of searching string. it is case-insensitive. ( captial search kriye to string ma capital  ke small je haise teni position with first occurence return krse)
$str6 = "I love php, I love php too!";
echo "Stripos : " . strripos($str6, "PHP") . "<br>";
echo "Stripos : " . strripos($str6, "i");
echo "<br><br><hr>";


// 8) str_replace(find,replace,string) => it is used to find and replace the string
$str7 = "hello world, the world is good....";
echo "String Replace is : " . str_replace("world", "earth", $str7) . "<br><br>";

// replace multiple word with at same time...
$find = array("hello", "world");
$replace =  array("Hi", "earth");
echo "String Replace Is : " . str_replace($find, $replace, $str7);

echo "<br><br><hr>";

// 9) strlolower() =>convert string into lowercase
$str8 = "HELLO WORLD";
echo "To Lower Case : " . strtolower($str8);
echo "<br><br><hr>";

// 10)  strtoupper() => convert the string into uppercase.
$str9 = "hello world";
echo "To Upper Case : " . strtoupper($str9);
echo "<br><br><hr>";

// 11) lcfirst() => convert the first character of string into lower case.
echo "first character into lowercase : " . lcfirst($str8);
echo "<br><br><hr>";

// 11) ucfirst() => convert the first character of string into upper case.
echo "first character into lowercase : " . ucfirst($str9);
echo "<br><br><hr>";

// 12) ucwords() => convert the first character of each word into upper case.
$str10 = "hello rutul sheladiya. how are you ?";
echo "convert first character of each word into uppercase : " . ucwords($str10);
echo "<br><br><hr>";

//13) str_split() => convert the string into array.
echo "<b>str_split ()</b>"."<br><br>";
$str11 = "Hello";
$ele = str_split($str11,2);
echo "<pre>";
print_r($ele);
echo "<br><br><hr>";

//14) str_repeat(string,times) => this function will repeat the  string with specified number of times.
echo "<b>str_repeat ()</b>"."<br><br>";
$str12 = "Hello ";
echo str_repeat($str12,10);  
echo "<br><br><hr>";

//15) strrev() => it will revere the string.
echo "<b>strrev Function ()</b>"."<br><br>";
$str13 = "Rutul";
echo "Reverse String Is : ".strrev($str13);
echo "<br><br><hr>";

//16) trim() => it will remove the white space & specified character from the both side of the string
echo "<b>Trim Function ()</b>"."<br><br>";
$str14 = "Hello World!";
echo $str14."<br><br>";
echo "Using Trim Function Remove Specified Character : ".trim($str14,"Hed!")."<br><br>";

// remove white space
$str15 = "  Hello World!  ";
echo $str15."<br><br>";
echo "Using Trim Function Remove White Spaces:".trim($str14);
echo "<br><br><hr>";


// 17) rtrim() =. it will remove the white space & specified character from left side of the string
echo "<b>rtrim Function ()</b>"."<br><br>";
// remove space from right side
$str16="Hello World   ";
echo "With Space : ".$str16."<br>";

echo "Without Space : ".rtrim($str16)."<br><br>";

// remove specified character from right side of string
$str17="Rutul Sheladiya";
echo $str17."<br>";
echo "Remove specified character : ".rtrim($str17,"ayR");
echo "<br><br><hr>";


// 18) ltrim() => it will remove the white space & specified character from left side of the string
echo "<b>ltrim Function ()</b>"."<br><br>";
// remove space from right side
$str18="     Hello World";
echo "With Space : ".$str18."<br>";  
echo "Without Space : ".ltrim($str18)."<br><br>";

// remove specified character from right side of string
$str19="Rutul Sheladiya";
echo $str19."<br>";
echo "Remove specified character : ".ltrim($str19,"ayR");
echo "<br><br><hr>";


// 19)htmlentities() => this function convert the special character into html entities.
echo "htmlentities()"."<br><br>";
$str20 = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo $str20."<br>";

$data =  htmlentities($str20)."<br>";
echo $data."<br>";

// decode htmlentities
echo html_entity_decode($data);
echo "<br><br><hr>";

//20 htmlspecialchars() => this function convert some predefined character into html entities. like (&,",',<,>)
$str21 = "This is some <b>bold</b> text.";
$data1 = htmlspecialchars($str21);
echo $data1."<br>";
echo html_entity_decode($data1);
echo "<br><br><hr>";


//21 explode(seprator,string,limit) =>  explode function convert the string into array.
echo "Explode Function"."<br><br>";
$str = "Hello World. It's a beautiful day";
$data = explode(" ",$str,4); // => ahiya jetli limit apiye tetla number of index ma array banavi apse ex limit 3 apiye to [0,1,2] a three index create krse.
// $data = str_split($str,2); // => limit ma jetla apishu aetla character ne bhega rakhi ne aaray banavse. 
print_r($data);
echo "<br><br><hr>";

//22 implode(seprator,array) => this function will convert the array into string.
echo "Implode Function"."<br><br>";
$ary = array ("hello","world","beautiful","day");
$str22 = implode("  ",$ary);
echo $str22;
echo "<br><br><hr>";


//23 printf(format,arg1,arg2) => it will print the formatted string
echo "Printf Function"."<br><br>";
$a=10;
$b=1000;
printf("laptop qty is : %d & price is : %d",$a,$b)."<br><br>";
echo "<br>";    
printf("%f",10.49);

echo "<br><br><hr>";

//23 sprintf(format,arg1,arg2) => it will print the formatted string but the difference is that it will not directly print the value it will return the value.
echo "Printf Function"."<br><br>";
$a1=10;
$b1=1000;
echo sprintf("laptop qty is : %d & price is : %d",$a1,$b1)."<br><br>";
echo "<br>";
$test = sprintf("%d %d Hexadecimal value : %x Scintific notation :%e",10,20,30,40);
echo $test;
echo "<br><br><hr>";

// 24 strcmp() =>   compare 2 string ( it is binary safe & case -sensitive )
echo "Strcmp Function"."<br><br>";
// $s1="hello";
// $s2="Hello";
// echo strcmp($s1,$s2)."<br>";
echo strcmp("Hello World","Hello World") ."<br>";
echo strcmp("Hello World","HELLO World")."<br>";
echo strcmp("Hello World","Hello World. Hey")."<br>";
echo "<br><br><hr>";

// 25) strcasecmp() =>  it will compare the 2 string ( it is binary safe and case-insensitive)
echo "strcasecmp Function"."<br><br>";
echo strcasecmp("Hello World","Hello World") ."<br>";
echo strcasecmp("Hello World","HELLO WORLD")."<br>";
echo strcasecmp("Hello World","Hello World. Hey")."<br>";
echo "<br><br><hr>";

// 26) str_shuffle => string each and every charater ne ramdomly postion change kri dehse. jyare page refresh kariye tyare dar vakhate each word ni postition change thase.
echo "str_shuffle Function"."<br><br>";
$str23 = "Rutul Sheladiya";
echo str_shuffle($str23);
echo "<br><br><hr>";

// 27) addcslashes() => this function will add the backslashes in front of specified character. (case sensitive)
echo "addcslashes Function"."<br><br>";
$str24 = "Welcome to my humble Homepage!";
echo $str24."<br><br>";

echo addcslashes($str24,"l")."<br>";
echo addcslashes($str24,"m")."<br>";
echo addcslashes($str24,"H");
echo "<br><br><hr>";


// 27) stripslashes() => it will remove the backslashes that is added by addcslashes ()
echo "stripslashes Function"."<br><br>";
$str25 = "Welco\me to \my hu\mble Ho\mepage!";
echo $str25."<br>";
echo stripslashes($str25);
echo "<br><br><hr>";

//28) strip_tages() => this function is used to remove the html tags from string.
echo "strip_tages() Function"."<br><br>";
$str26 = "Welcome to <b>my</b> humble <i>Homepage!</i>";
echo "Before Remove Tags : ". $str26."<br>";
echo "After Remove Tags".strip_tags($str26)."<br><br>";

echo "Kepp Bold tage".strip_tags($str26,"<b>")."<br><br>";
echo "<br><br><hr>";

// 29) wordwrap(string,width,break,cut) => wordwrap function wrap the string into new lines when it reaches specified length.{cut = true = wrap / false = no-wrap}
echo "wordwrap() Function"."<br><br>";
$str27 = "An example of a long word is: Supercalifragulistic";
echo $str27."<br><br>";
echo wordwrap($str27,4,"<br>",TRUE);
echo "<br><br><hr>";

//30) chunk_split(string,lenght,end) => this function is used to split the string into small part or chunks.
echo "chunk_split() Function"."<br><br>";
$str28="Hello Rutul Sheladiya";
echo "Original String".$str28."<br><br>";
echo chunk_split($str28,2,"/");