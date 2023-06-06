<!-- when we are trying to access private static method outside of the class at that time __callstatic method will called and  give the error 
or whatever operation we wanna to perform. -->

<?php
// we are calling private static method outside of the class so it will give fatal error.
// class A{
//    private static function showData(){
//         echo "This is private static method";
//     }
// }
// A::showData();


class B{
    private static function getData(){
        echo "Private static method called";
    }
    
    static function __callStatic($method, $arguments)
    {
        echo "you are trying to access private static method $method";
        // it will check the method is exist or not in class
        // if(method_exists(self::class, $method)){
        //  return self::getData();
        // }
    }
}
B::getData();
?>