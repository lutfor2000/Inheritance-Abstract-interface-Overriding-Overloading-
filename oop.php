<?php
class OOP{
    public $number =20 ;
    public $number_two = 40 ;

    // public function __construct($number,$number_two){
    //    $this->number = $number;
    //    $this->number_two = $number_two;
    // }

    function add(){
       $sum = $this->number + $this->number_two;
       echo "This Number : {$sum} \n";
    }

    function loop(){
        $sum = 0;
        for($i=1; $i<10; $i++){
            $sum += $i;
            echo "{$i}-Bangladesh \n";
        }
        echo "Total : {$sum}";
    }
}

$result = new OOP();
$result->add();
$result->loop();
