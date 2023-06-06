<!-- 
=> jyare koi object ne as a string tarike print karvani try karishu tyare __tostring() method automatic call thay jashe.
-->

<?php
class A{
     function __toString(){
        return "you are trying to print object as string it's not possible using echo ".get_class($this);
     }
}
$obj1 = new A();
echo $obj1;
?>