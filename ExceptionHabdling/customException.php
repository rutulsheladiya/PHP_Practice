<?php
class myExcepion extends Exception
{
    function errorMessage()
    {
        $error = "<br>" . "Number Can Not Be Divide By 3" . "<br>" . $this->getMessage() . "<br>" . "Error In This Line Number : " . $this->getLine() . "<br>";
        return $error;
    }
}
function divison($n)
{   
    try {
        if ($n == 0) {
            throw new Exception("<br>" . "Number Can Not divide by 0." . "<br>");
        } else if ($n == 3) {
            throw new myExcepion("<br>" . "Number Is 3." . "<br>");
        } else {
            $divison = 2 / $n;
            echo "<br>" . "Divison Is : " . $divison . "<br>";
        }
    } catch (myExcepion $e) {
        echo $e->errorMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "<br>" . "Finally Block Execute Always." . "<br>";
    }
}

divison(10);
divison(3);
divison(0);

echo "<br><br><hr><br>";

// array outof bound exception
function arrayBound(){
    try{
        $data = array("rutul","ravi","patel");
        $index =5;
        if($index >= count($data)){
            throw new Exception("Array Index Out Of Bound...");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
arrayBound();