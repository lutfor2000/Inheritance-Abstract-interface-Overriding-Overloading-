<?php
abstract class Father{
     public function Message(){
        for($i=0; $i<=10; $i++){
           echo "Number is : {$i} \n";
        }
     }
}

class son extends Father{
 //Empty
}


$objectName = new son();
$objectName->Message(); 

$abstract = new Father();
$abstract->Message();
