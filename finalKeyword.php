<?php 

class Father{
    final public function Overriding(){
        for($i=0; $i < 10; $i++){ 
            echo "Father : {$i} \n";
        }
    }
}

class son extends Father{
    public function Overriding(){
        //Overriding..........
        for($i = 0; $i <= 20 ; $i++){
           echo "Son : {$i} \n";
        }
    }
}

$objectName = new Father();
$objectName->Overriding();

