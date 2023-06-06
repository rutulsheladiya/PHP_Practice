<?php
class employee
{
    public $name, $age, $salary;
    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    // function __construct(){
    //     echo "<br>"."employee called"."<br>";
    // }

    function showData()
    {
        echo "<b>Employee Details</b>" . "<br>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->salary . "<br>";
    }
}
class manager extends employee
{
    public $pa = 1000;
    public $mobie = 200;
    public $totalSalary;
    function showDaata()
    {
        $this->totalSalary = $this->salary + $this->pa + $this->mobie;
        echo "<b>Manager Details</b>" . "<br>";
        echo "Manager Name : " . $this->name . "<br>";
        echo "Manager Age : " . $this->age . "<br>";
        echo "Manager Salary : " . $this->totalSalary . "<br>";
    }


    // function __construct(){
    //     echo "manager called";
    // }
}
// employee class na object thi employee nu constructor call thase
// $obj1 = new employee("Rutul",22,40000);
// $obj1->showData();


// manager name na object thi manager constructor call thase
// $obj2 = new manager();
$obj1 = new employee("Rutul", 22, 40000);
$obj1->showData();
$obj2 = new manager("Raavi", 22, 40000);
$obj2->showDaata();
// $obj2->showData();
