<?php
// $n=0;
// try{
//   if($n<=0){
//    throw new Exception("Enter Valid Number");
//   }
//   $div = 2/$n;
//   echo $div;
// }catch(Exception $e){
//   echo $e->getMessage();
// }


// using function
function divide($n)
{
    try {
        if ($n <= 0) {
            throw new Exception("<br>" . "Enter Valid Number" . "<br>");
        }
        $div = 2 / $n;
        echo "<br>" . $div . "<br>";
    } catch (Exception $e) {
        echo $e->getMessage();
        // echo $e->getLine();   // ketla number ni line upr thi exception throw thay che e batavse.
        //echo $e->getCode();
        //  echo $e->getFile();   // kai file ma error che ae batavse
    } finally {
        echo "<br>" . "finally block work always" . "<br>";
    }
}

// divide(10);
divide(0);
// divide(12);
// divide(15);
// divide(-1);
