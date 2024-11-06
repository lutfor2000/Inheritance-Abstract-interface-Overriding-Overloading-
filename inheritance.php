<?php
 class Father{
       public $message = "Welcome \n";
       public  function Print(){
            for($i=0; $i <= 10; $i++){
            echo "Print Number {$i} \n";
            }
       }
       
 }
 
 class Son extends Father{

 }

 $object = new Son();
 echo $object->message;
 $object->Print();

 $object_one = new Father();
 echo $object_one->message;
 
//  $print = new Father();
//  $print->Print();


 // echo Father::Print(); us static

 