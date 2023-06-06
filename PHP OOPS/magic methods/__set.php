<!-- jyare private property or undefined property ne class ni bahar value set karvani try kariye tyare __set() automatic call thay jashe. -->
<?php
class A{
    private $name;
    // // it will call when we try to set the value of private property or undefined property.
    // function __set($property,$value){
    //     echo "you are trying to set the value of private or undefined property : $property";
    // }

    function showData(){
        echo $this->name;
    }
    // set the value of private property
    function __set($property,$value){
        if(property_exists($this,$property)){
            $this->$property = $value;  
        }else{
            echo "you are trying to set the value of private or undefined property that are not available. : $property";
        }
    }
}
$obj1 = new A();
$obj1->name = "Rutul Sheladiya";
$obj1->age =22;
// $obj1->showData();
?>