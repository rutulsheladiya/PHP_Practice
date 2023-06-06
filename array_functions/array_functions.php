<?php
echo "Array Functions." . "<br><br><hr>";

//1) count() => this function will return the total number of element in array.
echo "<b>Count() Function</b>" . "<br><br>";
$arr1 = array("a", "b", "c", "d", "e", "f", "g");
echo "<pre>";
print_r($arr1);

echo "Length Of The Index Array Is : " . count($arr1) . "<br><br>";

// associative array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Length Of The Associative Arry Is : " . count($age) . "<br><br>";

// multidimentional array
$cars = array(
  "First" => array("Volvo", 22, 18, 40, 30),
  "Second" => array("BMW", 15, 13),
  "Third" => array("Saab", 5, 2),
  "Fourth" => array("Land Rover", 17, 15)
);

echo "Multidimentional Array Contain Array : " . count($cars) . "<br><br>";
echo "Multidimentional Array All Element : " . count($cars, 1) . "<br><br>";
echo "Multidimentional Array First Array element : " . count($cars['First']) . "<br><br>";
echo "Multidimentional Array First Array element : " . count($cars['Second']) . "<br><br>";
echo "Multidimentional Array First Array element : " . count($cars['Third']) . "<br><br>";

echo "<br><br><hr>";
// 2) size of() => this function also return the total number of element in array. it is the alias of count()

//3) array_push($array,value1,value2,value3....) =>this function will insert one or more element at the end of the array.
echo "<b>array_push Function</b>" . "<br><br>";

//index array
$arr2 = array('a', 'b', 'c', 'd');
echo "<pre>";
print_r($arr2);
array_push($arr2, 12, 20, "e");
echo "<pre>";
print_r($arr2);

// associative array
$arr3 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
print_r($arr3);
array_push($arr3, 22, 30);
//array_push($arr3,$arr3['Rutul']="22",$arr3['Ravi']="30");
echo "<pre>";
print_r($arr3);
echo "<br><br><hr>";

//4) array_pop(array) => this function will delete the last element of the array.

echo "<b>array_pop() Function</b>" . "<br><br>";
$arr4 = array('first', 'second', 'third', 'fourth', 'fifth');
echo "<pre>";
print_r($arr4);

array_pop($arr4);
echo "<pre>";
print_r($arr4);


$arr5 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "<pre>";
print_r($arr5);
array_pop($arr5);
echo "<pre>";
print_r($arr5);
echo "<br><br><hr>";


//5) array_shift($array) => this fuction will remove the first element from the array and return the value of removed element.
echo "<b>array_shift() Function</b>" . "<br><br>";
$arr6 = array('first', 'second', 'third', 'fourth', 'fifth');
echo "<pre>";
print_r($arr6);

echo array_shift($arr6);
echo "<pre>";
print_r($arr6);

// associative array
$arr7 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "<pre>";
print_r($arr7);

echo array_shift($arr7);
echo "<pre>";
print_r($arr7);
echo "<br><br><hr>";


//6) array_unshift($array,val1,val2,val3....) => this funtion will add new array element at the begining of the existing array.
echo "<b>array_unshift() Function</b>" . "<br><br>";

// indexed array
$arr8 = array('first', 'second', 'third', 'fourth', 'fifth');
echo "<pre>";
print_r($arr8);

array_unshift($arr8, "six", "seven");
echo "<pre>";
print_r($arr8);

// associative array
$arr9 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "<pre>";
print_r($arr9);

array_unshift($arr9, 22, 23);
// array_unshift($arr9,$arr9['Rutul']="22",$arr9['Ravi']="23");
echo "<pre>";
print_r($arr9);

echo "<br><br><hr>";

// 7) array_merge($arr1,$arr2)
echo "<b>array_merge() Function</b>" . "<br><br>";

//index array
$arr10 = array('first', 'second', 'third');
$arr11 = array('fourth', 'fifth', 'six');
echo "<pre>";
print_r(array_merge($arr10));


// associative array
$arr12 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$arr13 = array("Rutul" => "22", "Purvish" => "45", "Ben" => "10");
echo "<pre>";
print_r(array_merge($arr12, $arr13));
// print_r($arr12+$arr13);

// associative array with numeric index
$arr15 = array(5 => "Rutul", 6 => "Ravi", 7 => "Purvish");
echo "<pre>";
print_r(array_merge($arr15));


// merge multidimentional array
$arr14 = array(
  "First" => array("Volvo", 22, 18, 40, 30),
  "Second" => array("BMW", 15, 13),
  "Third" => array("Saab", 5, 2),
  "Fourth" => array("Land Rover", 17, 15)
);
print_r(array_merge($arr14['First'], $arr14['Second']));
echo "<br><br><hr>";

// 8) merge_merge_recursive($arr1,$arr2)
echo "<b>array_merge_recursive() Function</b>" . "<br><br>";
$arr16 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$arr17 = array("Rutul" => "22", "Purvish" => "45", "Ben" => "10");

echo "<pre>";
print_r(array_merge_recursive($arr16, $arr17));

$arr18 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$arr19 = array(
  "Rutul" => "22", "Purvish" => "45", "Ben" =>
  array(
    "color" => array('blue', 'red'),
    "size" => array(10, 12)
  )
);

echo "<pre>";
print_r(array_merge_recursive($arr18, $arr19));

echo "<br><br><hr>";



//9) array_combine() => combine 2 array and create one associative array. first array element can be consider as a key. and second array element can be conside as a value.
echo "<b>array_merge_combine() Function</b>" . "<br><br>";

$arr20 = array("Rutul", "Ravi", "Purvish", "Rohit");
$arr21 = array(92, 90, 67, 87);
print_r(array_combine($arr20, $arr21));


$arr22 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$arr23 = array("Rutul" => "22", "Purvish" => "45", "Ben" => "10");
print_r(array_combine($arr22, $arr23));
echo "<br><br><hr>";

//10) array_keys($array) => this function will return the array keys in new array
echo "<b>array_keys() Function</b>" . "<br><br>";
$arr24 = array("Rutul", "Ravi", "Purvish", "Rohit");
$arr25 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

print_r(array_keys($arr24));
print_r(array_keys($arr25));


print_r(array_key_first($arr25));
echo "<br>";
print_r(array_key_last($arr25));
echo "<br>";

// print_r(key_exists("Peter",$arr25));

key_exists("Peter", $arr25);

if ($data) {
  echo "Key Exist";
} else {
  echo "Key Not Exist";
}
echo "<br><br><hr>";

//11) array_values($array) => this function will return the array values. return the array value in new index array with numeric index.
echo "<b>array_values() Function</b>" . "<br><br>";
$arr26 = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
print_r(array_values($arr26));
echo "<br><br><hr>";

// 12) array_unique() => this function will return the unique value from array. it will remove the duplicate value from array 
echo "<b>array_unique() Function</b>" . "<br><br>";
$arr27 = array("Rutul", "Ravi", "Purvish", "Sumit", "Ravi", "Rutul");
print_r($arr27);
print_r(array_unique($arr27));

$arr28 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "red", "e" => "green",);
print_r($arr28);
print_r(array_unique($arr28));
echo "<br><br><hr>";

// 13) in_array("search value",array,type)
echo "<b>in_array() Function</b>" . "<br><br>";
$arr28 = array("Rutul", "Ravi", "Purvish", "Sumit", "Ravi", "Rutul", 23);
echo in_array("Rutul", $arr28) . "<br>";

echo in_array("23", $arr28, true) . "<br>";

if (in_array("Rutul", $arr28)) {
  echo "Match";
} else {
  echo "Not Match";
}
echo "<br><br><hr>";

// 13) array_search("search value",array,strict) => this function will search the value and return the key of that value.
echo "<b>array_search() Function</b>" . "<br><br>";

$arr29 = array("rutul", "ravi", "purvish", 10, 20, 30);
print_r($arr29);

echo array_search("10", $arr29, true) . "<br><br>";

$arr30 = array("Id" => "101", "Name" => "Rutul", "color" => "White", "mobile" => 8320893080);
print_r($arr30);
echo array_search("White", $arr30);

echo "<br><br><hr>";


//14) array_reverse($array)
echo "<b>array_reverse() Function</b>" . "<br><br>";
$arr31 = array(10, 20, 50, 30, 50);
print_r($arr31);
print_r(array_reverse($arr31, true));

$arr32 = array("Id" => "101", "Name" => "Rutul", "color" => "White", "mobile" => 8320893080);
print_r($arr32);
print_r(array_reverse($arr32));

$arr33 = array("first", "second", array("third", "fourth"));
print_r($arr33);
print_r(array_reverse($arr33));
print_r(array_reverse($arr33, true));
echo "<br><br><hr>";

// 15) array_sum($array) =>  this function will return the sum of all values.
echo "<b>array_sum() Function</b>" . "<br><br>";
$arr34 = array(10, 20, 50, 30, 50);
print_r($arr34);
echo array_sum($arr34);
echo "<br><br>";

$arr32 = array("first" => 10, "second" => 10, "third" => 10, "four" => "10", "five" => "rutul");
print_r($arr32);
echo array_sum($arr32);
echo "<br><br><hr>";


// 16) array_diff() => this function will compare the 2 aary and return the value of array 1 that value are not present in array2.
echo "<b>array_diff() Function</b>" . "<br><br>";
$arr33 = array(10, 20, 30, 40, 50);
$arr34 = array(10, 90, 80, 40, 60);
print_r(array_diff($arr33, $arr34));


$arr35 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$arr36 = array("e" => "red", "f" => "black", "g" => "purple");
print_r(array_diff($arr35, $arr36));

$arr37 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$arr38 = array("e" => "red", "f" => "black", "g" => "purple");
$arr39 = array("a" => "red", "b" => "black", "h" => "yellow");

$result = array_diff($arr37, $arr38, $arr39);
print_r($result);
echo "<br><br><hr>";

//17) array_intersect() => this fuction will compare the one or more array ans return the same value.
echo "<b>array_intersect() Function</b>" . "<br><br>";
$arr40 = array(10, 20, 30, 40, 50);
$arr41 = array(10, 90, 80, 40, 60);
print_r(array_intersect($arr40, $arr41));

$arr42 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$arr43 = array("e" => "red", "f" => "black", "g" => "purple");
print_r(array_intersect($arr42, $arr43));


$arr44 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$arr45 = array("e" => "red", "f" => "black", "g" => "purple");
$arr46 = array("a" => "red", "b" => "black", "h" => "yellow");
print_r(array_intersect($arr44, $arr45, $arr46));

echo "<br><br><hr>";

//18) sort() => sort the index array in assending order.
echo "<b>sort() Function</b>" . "<br><br>";
$arr47 = array(50, 60, 12, 34, 9, 56, 89, 5, 54, 2, 60);
print_r($arr47);
sort($arr47);
print_r($arr47);

$arr48 = array("volvo", "bmw", "toyota", "apple", "banana");
print_r($arr48);
sort($arr48);
print_r($arr48);
echo "<br><br><hr>";

// 19) rsort() => sort the index array in descending order.
echo "<b>rsort() Function</b>" . "<br><br>";
$arr49 = array(50, 60, 12, 34, 9, 56, 89, 5, 54, 2, 60);
print_r($arr49);
rsort($arr49);
print_r($arr49);

$arr50 = array("a", "b", "d", "u", "l","w","g","n");
print_r($arr50);
rsort($arr50);
print_r($arr50);
echo "<br><br><hr>";


//20) ksort() => this function will sort the associative array in assending order based on key.
echo "<b>ksort() Function</b>" . "<br><br>";
$arr51 = array(
  "id" => 101,
  "name" => "rutul",
  "mobile" => 8320893080,
  "address" => "soham apartment",
  "city" => "surat",
  "state" => "gujarat",
  "country" =>  "india"
);

print_r($arr51);
ksort($arr51);
print_r($arr51);


echo "<br><br><hr>";

//21) asort() => this function will sort the associative array in assending order based on value.
echo "<b>asort() Function</b>" . "<br><br>";
$arr52 = array(
  "name" => "rutul",
  "address" => "soham apartment",
  "city" => "surat",
  "state" => "gujarat",
  "country" =>  "india"
);
print_r($arr52);
asort($arr52);
print_r($arr52);
echo "<br><br><hr>";

//22) krsort()=> this function will sort the associative array in descding order based on key.
echo "<b>krsort() Function</b>" . "<br><br>";
$arr53 = array(
  "id" => 101,
  "name" => "rutul",
  "mobile" => 8320893080,
  "address" => "soham apartment",
  "city" => "surat",
  "state" => "gujarat",
  "country" =>  "india"
);

print_r($arr53);
krsort($arr53);
print_r($arr53);


echo "<br><br><hr>";

// 23) arsort() => this function will sort the associative array in descding order based on value.
echo "<b>arsort() Function</b>" . "<br><br>";
$arr54 = array(
  "name" => "rutul",
  "address" => "soham apartment",
  "city" => "surat",
  "state" => "gujarat",
  "country" =>  "india"
);
print_r($arr54);
arsort($arr54);
print_r($arr54);
echo "<br><br><hr>";

//24) array_flip() => this function will flip or exchange the key with value and value with key.
echo "<b>array_flip() Function</b>" . "<br><br>";

// index array
$arr57 = array("Rutul", "Ravi", 12, 45, "Mehul");
print_r($arr57);
$arr58 = array_flip($arr57);
print_r($arr58);


// associative array
$arr55 = array(
  "id" => 101,
  "name" => "rutul",
  "mobile" => 8320893080,
  "address" => "soham apartment",
  "city" => "surat",
  "state" => "gujarat",
  "country" =>  "india"
);
print_r($arr55);
$arr56 = array_flip($arr55);
echo "<pre>";
print_r($arr56);
echo "<br><br><hr>";


//25) array_change_key_case($array,CASE_UPPER/CASE_LOWER) => this function will chnage the case of the array key. like ( uppercase / lowercase )
echo "<b>array_change_key_case() Function</b>" . "<br><br>";
$arr59 = array(
  "id" => 101,
  "name" => "rutul",
  "mobile" => 8320893080,
  "address" => "soham apartment",
  "city" => "surat",
  "state" => "gujarat",
  "country" =>  "india"
);

print_r($arr59);
print_r(array_change_key_case($arr59, CASE_UPPER));
echo "<br><br><hr>";

//26) array_walk($array,"functionname",$parameter) => this function will run / print each element of array in user defined function. it is used with index array & associative array.
echo "<b>array_walk() Function</b>" . "<br><br>";
$arr60 = array(
  "id" => 101,
  "name" => "rutul",
  "mobile" => 8320893080,
  "address" => "soham apartment",
  "city" => "surat",
  "state" => "gujarat",
  "country" =>  "india"
);
array_walk($arr60, "myFunction", "is Key of");
function myFunction($value, $key, $para)
{
  echo "$key :  $para  : $value" . "<br>";
}

echo "<br>";

$numbers = array(1, 2, 3, 4, 5);

function multiply_by_index($value, $index)
{
  echo "$index : $value" . "<br>";
}

array_walk($numbers, 'multiply_by_index');

// print_r($numbers);
echo "<br><br><hr>";

//27) array_walk_recursive($array,"functionname",$parameter) => this function will run each array element in user defined function.key and value will be pass as a parameter. basically diff between array_walk & array_walk_recursive is this function will used with complex deeper array like multidimentional array.
echo "<b>array_walk_recursive() Function</b>" . "<br><br>";
$arr61 = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);
array_walk_recursive($arr61, "fetchAll","is Key Of");
function fetchAll($value, $index,$para)
{
  echo "$index $para $value" . "<br>";
}
echo "<br><br>";

$arr62 = array(
  array(
    "name" => "Alice",
    "age" => 25,
    "hobbies" => array("reading", "biking")
  ),
  array(
    "name" => "Bob",
    "age" => 30,
    "hobbies" => array("swimming", "painting")
  )
);
array_walk_recursive($arr62, "getData");
function getData($value, $index)
{
  echo "$index : $value" . "<br>";
}

echo "<br><br><hr>";

//28) array_chunk($array,size,preserve) => this fnction will split / chunk the array into new array.
echo "<b>array_chunk() Function</b>" . "<br><br>";

// index array

$arr63 = array("Rutul", "ravi", "purvish", "sumit", "denish", "mehul", "mihir", "deep", "Rahul", "Rohit", "mahesh");
print_r($arr63);
print_r(array_chunk($arr63, 2,true));
//print_r(array_chunk($arr63, 2, true));

// associative array

$arr64 = array(
  "first_name" => "John",
  "last_name" => "Doe",
  "age" => 30,
  "address" => array(
    "street" => "123 Main St",
    "city" => "Anytown",
    "state" => "CA",
    "zip" => "12345"
  ),
  "phone_numbers" => array(
    "home" => "555-1234",
    "work" => "555-5678",
    "mobile" => "555-9012"
  ),
  "email" => "john.doe@example.com",
  "company" => "Acme Inc.",
  "job_title" => "Software Developer",
  "salary" => 75000
);

print_r($arr64);
print_r(array_chunk($arr64, 2, true));
echo "<br><br><hr>";


//29) array_fill() => fill the array with values.

echo "<b>array_fill(index,totalnumber of element,value) Function</b>" . "<br><br>";

// index array
$arr65 = array();
$arr65 = array_fill(3, 4, "hey");
print_r($arr65);
echo "<br><br><hr>";

//30) array_slice($aary,start,lenght,preserve) => this function is used to extract the specific value from the array. it will return the new array
echo "<b>array_Slice(index,totalnumber of element,value) Function</b>" . "<br><br>";

$arr66 = array(10, 20, 30, 'Rutul', 'ravi', 'mayur', 'Ronak', 23, 45);
print_r($arr66);


// without preserve
echo "<br>" . "without preserve" . "<br><br>";
print_r(array_slice($arr66, 1, 5));




// with preserve
echo "<br>" . "with preserve" . "<br><br>";
print_r(array_slice($arr66, 1, 5, true));


// negative value
echo "<br>" . "Negative value" . "<br><br>";
print_r(array_slice($arr66, -6, 3));

// associative array

echo "<br>" . "<b>associative array</b>" . "<br><br>";
$arr67 = array(
  "id" => 101,
  "name" => "rutul",
  "mobile" => 8320893080,
  "address" => "soham apartment",
  "city" => "surat",
  "state" => "gujarat",
  "country" =>  "india"
);

print_r($arr67);
print_r(array_slice($arr67, 2, 3));
print_r(array_slice($arr67, -5, 2));

echo "<br><br><hr>";

//31) array_splice($array1,start,length,$array2) => this function is used remove & add new values in existing array. it will perform chnages in existing array.

echo "<b>array_Splice(index,totalnumber of element,value) Function</b>" . "<br><br>";

$arr68 = array("apple", "banana", "orange", "grape", "Rutul", "ravi", "priyank", "mayank", "purvish");
$arr69 = array("A", "B", "C");
print_r($arr68);

// remove value from array
echo "<br>" . "Remove value from array" . "<br><br>";
// print_r(array_splice($arr68,2));
// array_splice($arr68,2);
// array_splice($arr68,2,3);
// array_splice($arr68,1,-1);


echo "<br>" . "Remove value & add new value" . "<br><br>";
// array_splice($arr68,2,3,$arr69);

// add array element at the end of the array
// array_splice($arr68,count($arr68),0,$arr69);


// add array element at the begining of the array
// array_splice($arr68,0,0,$arr69);


echo "<br>" . "without Removing any value & add new value" . "<br><br>";
// array_splice($arr68,1,0,$arr69);
array_splice($arr68, 4, 0, $arr69);
print_r($arr68);

echo "<br><br><hr>";

//32) array_map() => array_map(functionname, arr1,arr2,arr3...) send each value of an array to the user-made function, andf return the array with new values, given by user-made function.
// diff between array_walt &array_map is array_map() always return new array and array_walk does not return the array.

echo "<b>array_map(function name,arr1,arr2,arr3...) Function</b>" . "<br><br>";

$arr70 = array(1, 2, 3, 4, 5);
print_r($arr70);

function square($data)
{
  return $data * $data;
}


$suqare_arr = array_map("square", $arr70);
print_r($suqare_arr);


echo "<br>" . "<b>Second Example</b>" . "<br><br>";

function myFun1($data)
{
  if ($data === "Dog") {
    return "Monkey";
  }
  return $data;
}
$arr71 = array("Horse", "Dog", "Cat");
print_r($arr71);
$getData1 = array_map("myFun1", $arr71);
print_r($getData1);

echo "<br>" . "<b>Third Example</b>" . "<br><br>";

$arr72 = array("Horse", "Dog", "Cat");
$arr73 = array("Cow", "Dog", "Rat");

function myFun2($data1, $data2)
{
  if ($data1 === $data2) {
    return "Same";
  }
  return "Different";
}

$getData2 = array_map("myFun2", $arr72, $arr73);
print_r($getData2);
echo "<br><br><hr>";

//33) array_reduce($array,"function name") => this functions send the array values to the userdefined function and return a string / return a single value.
echo "<b>array_reduce(array,function,intial) Function</b>" . "<br><br>";

echo "<br>" . "<b>first Example</b>" . "<br><br>";

$arr73 = array("Dog", "Cat", "Horse");

function myFun3($data1, $data2)
{
  return $data1 . "-" . $data2;
}

$getData3  = array_reduce($arr73, "myFun3");
print_r($getData3);


echo "<br><br>" . "<b>Second Example</b>" . "<br><br>";
$arr74 = array("Dog", "Cat", "Horse");

function myFun4($data1, $data2)
{
  return $data1 . "-" . $data2;
}

$getData4  = array_reduce($arr74, "myFun4","test");
print_r($getData4);

echo "<br><br>" . "<b>third Example</b>" . "<br><br>";
$arr75=array(10,15,20);

function myFun5($data1 ,$data2){
  $data = $data1+$data2;
  return $data1;
}
$getData5 = array_reduce($arr75,"myFun5");
print_r($getData5);


//34) range() => range function is used to create a array contaning range of element.
$data = range(0,50);
print_r($data);