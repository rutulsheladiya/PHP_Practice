<?php
// public
// class student{
//     public $fname;
//     public $lname;
//     public function data(){
//        echo "details"."<br>";
//        echo $this->fname ."<br>";
//        echo $this->lname ."<br>";
//     }
// }
// $obj1 = new student();
// $obj1->fname = "Rutul";    //  a varaiable public che atle apde tene clasas ni bar pan use kari shakiye chiye
// $obj1->lname = "sheladiya";   //  a varaiable public che atle apde tene clasas ni bar pan use kari shakiye chiye
// $obj1->data();  // insedie class ni anadar function public decalare karyu che atle apde tene outside of class pan use kari shaloye.


// protected.
// class student
// {
//     protected $fname;
//     protected $lname;
//     function __construct($fname, $lname)
//     {
//         $this->fname = $fname;
//         $this->lname = $lname;
//     }
//     public function data()
//     {
//         echo "<b>Details</b>" . "<br>";
//         echo $this->fname . "<br>";
//         echo $this->lname . "<br>";
//     }
// }
// class employee extends student
// {
//     public function dataShow()
//     {
//         echo "<b>Details</b>" . "<br>";
//         echo $this->fname . "<br>";
//         echo $this->lname . "<br>";
//     }
// }
// //$obj1->data(); // jo apde function ne protected banaviye to outside fuction we can not access it.
// // $obj1->fname = "Rutul";   // fname protected che so apde aene outside of class access na kari shakiye
// // $obj1->fname = "sheladiya"; // lname protected che so apde aene outside of class access na kari shakiye


// // $obj1 = new student("Rutul", "Sheladiya");
// // $obj1->data();
// $obj2 = new employee("Mansi", "Patel");
// $obj2->dataShow();


// Private 
class student{
    private $fname;
    private $lname;
     
    function __construct($fname,$lname)
    { 
       $this->fname = $fname;
       $this->lname = $lname;  
    }
    private function Data(){
        echo "<b>Data</b>";
        echo $this->fname."<br>";
        echo $this->lname."<br>";
    }
}
class employee  extends student{
     function fetchData(){
        $this->fname = $fname;
        $this->lname = $lname;  
     }
}
$obj1 = new student("Rutul","Patel");

// $obj1->fname = "Rutul"; //variable private che so outside of class we can no access it.
// $obj1->lname = "Patel"; //variable private che so outside of class we can no access it.
// $obj1->Data(); // Data() function is private so we can not access it out side of function.

$obj2 = new employee("Ravi","Patel"); //student table na constructor ma data jashe but tya fname & lname variable private che atle private variable outside of class access thase nahi.
$obj2->fetchData(); // function ma variable undefined avse.
?>



















<!-- public : je method and variable public hoy tene apde inside class , and outside of class pan use kari shakiye chiye. and class 
ne derived kari ne pan apde public method and variable ne use kari shakiye chiye.

protected : je variable and method ne apde protected banaviye tene apde outside of function use na kari shakiye jem ke teno object 
na banavi chakiye protected method ne object through call na kari shakiye.
protected variable and method ne apde bija class ma derived kari shakiye using inheritence.

private : private variable and method ne apde no scope khali te class purto j hoy che out side of class we can not use it.
and we can not derived private variable and method. -->