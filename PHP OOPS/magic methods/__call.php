<!-- when we are trying to call private method / function of the class outside of the class at that time 
__call() will called automatically. -->
<?php
// class A{
//     private function showData(){
//         echo "This is private function.";
//     }
// }
// $obj1 = new A();
// $obj1->showData();
// // $obj1->getData();

// ===========================================================================


class B
{
    private $firstname, $lastname;

    private function showData($fname, $lname)
    {
        $this->firstname = $fname;
        $this->lastname = $lname;
    }

    function __call($method, $args)
    {
        echo "you are trying to access private or non defined method : $method <br>";
        echo "<pre>";
        print_r($args);
    }
}
$obj1 = new B();
$obj1->showData("Rutul", "Sheladiya");
// $obj1->fetchData();
?>