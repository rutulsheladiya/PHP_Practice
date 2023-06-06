<!-- 
=> serliaze method thi data jyare array ma convert thayelo hoy te data ne pacho object na from ma convert karva mate 
unserialize() use thay che and jyare unserialize() call thay teni pahela wakeup() execute thay. 

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

    function __wakeup(){
        echo "wakeup method called";
    }
}
$obj1 = new A();
$obj1->showData("Rutul","Sheladiya");
// print_r($obj1); 
// convert obj to array
$srl = serialize($obj1);
// echo "<pre>";
// echo $srl;


// convert Array to obj
$obj2 = unserialize($srl);
echo "<pre>";
print_r($obj2);
?>