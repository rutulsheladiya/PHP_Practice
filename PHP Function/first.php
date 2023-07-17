<?php 
// declare(strict_types=1);
// echo "PHP Functions."."<br><hr>"; 


// function test1(){
//     echo "Hello world.";
// }
// test1();

// echo "<br><br><hr>";

// function test2($first,$second){
//     echo "Sum of a and b : ".$first + $second;
// }
// test2(10,15);

// echo "<br><br><hr>";

// function test3($id,$name){
//  echo "Id : ".$id."<br>";
//  echo "Name : ".$name."<br>";
// }
// test3(1,"Rutul");

// echo "<br><br><hr>";

// function test4(int $id,string $name,int $age){
//     echo "Id : ".$id."<br>";
//     echo "Name : ".$name."<br>";
//     echo "Name : ".$age."<br>";
//    }
//    test4(1,"Rutul",90);

?>
<form method="post" action="action.php">
    <input type="text" name="name" id="name">
    <input type="email" name="email" id="email">
    <input type="submit" value="Submit" action="action.php">
    <input type="submit" value="Submit" formaction="action-data.php">
</form>