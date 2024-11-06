<?php
class Car{
    public static $color = "Green";

    public static function Driver(){
        echo "Drive The Car";
    }



}

echo Car::$color;     // Direct select Variable;
echo Car::Driver();  // Direct Select Method;

