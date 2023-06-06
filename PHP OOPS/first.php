<?php
class student
{
    public $a, $b, $c;
    function sum()
    {
        $this->c = $this->a + $this->b;
        return "Sum Of a and b is : ". $this->c."<br>";
    }
    function sub()
    {
        $this->c = $this->a - $this->b;
        return "Sub Of a and b is : ".$this->c."<br>";
    }
}
// first objects
$obj1 = new student();
$obj1->a = 40;
$obj1->b = 20;  
echo $obj1->sum();
echo $obj1->sub();
// echo $data;

// second object
$obj2 = new student();
$obj2->a = 200;
$obj2->b = 40;
echo $obj2->sum();
echo $obj2->sub();


// without $this 
// class student
// {
//     public $a, $b, $c;
//     function sum($first,$second)
//     {
//         // $a=$first;
//         // $b=$second;
//         // $result = $a + $b;
//         $result  = $first+$second;
//         return "Sum Of a and b is : ". $result."<br>";
//     }
//     function sub($first,$second)
//     {
//         $result  = $first-$second;
//         return "Sub Of a and b is : ".$result."<br>";
//     }
// }
// // first object
// $obj1 = new student();
// // $obj1->a = 40;
// // $obj1->b = 20;
// echo $obj1->sum(10,20);
// echo $obj1->sub(50,10);

// // second object
// $obj2 = new student();
// // $obj2->a = 200;
// // $obj2->b = 40;
// echo $obj2->sum(100,200);
// echo $obj2->sub(200,20);

