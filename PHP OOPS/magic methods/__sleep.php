<!-- 
=> jyare apde koi object ne serialize kariye tyare __sleep() automatically call thase.

=> object ne apde direct koi file,session ma store na karavi shakiye. te object ne apde array ma convert karvo pade
object ne array ma convert karva mate php ma serialize() method che je object ne array ma convert kare che. 

=> jyare object ne serialize() kari ne array ma convert thaya pachi aene echo karaviye tyare te class ni badhi property return karse
array na form ma. but apde badhi property nathi joti amuk property j joiye che tyare sleep method kam avse.

=> jyare serialize() call thase aeni pahela sleep method call thase and je property joti hoy aenu name array ma return kari devu.
-->

<?php
class A{
    public $firstName;
    public $lastName;
    public $courseName = "PHP";
    public $country = "India";

    function showData($fname,$lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }

    function __sleep(){
         return array('firstName','lastName');
    }
}
$obj1 = new A();
$obj1->showData("Rutul","Sheladiya");
// print_r($obj1);
$srl = serialize($obj1);
echo "<pre>";
echo $srl;






// echo $obj1->firstName;
// echo $obj1->lastName;
// echo $obj1->courseName;
// echo $obj1->country;
?>