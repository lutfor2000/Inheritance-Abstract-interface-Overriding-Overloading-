<?php
class Father{
    public $numberOne = 100;
    public $numberTwo = 200;

    public function addItem(){
        return $this->numberOne + $this->numberTwo;
    }
}

class Son extends Father{
    public function MulTwo(){
       $abba = parent::addItem();
       echo $abba*3;
      
    }
}

$objectName = new son();
$objectName->MulTwo();