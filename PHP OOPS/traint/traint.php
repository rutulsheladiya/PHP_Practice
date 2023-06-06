<?php
trait t1
{
    function sayHello()
    {
        echo "Hello World From Trait." . "<br>";
    }
    function sayHi()
    {
        echo "Hi From Trait Function" . "<br>";
    }
}

trait t2
{
    function sayHey()
    {
        echo "Heyaaaaaaaaaaaaaaa" . "<br>";
    }
}

class A
{
    use t1;
}
$obj1 = new A();
$obj1->sayHello();
$obj1->sayHi();

class B
{
    use t1, t2;
}
$obj2 = new B();
$obj2->sayHello();
$obj2->sayHi();
$obj2->sayHey();
