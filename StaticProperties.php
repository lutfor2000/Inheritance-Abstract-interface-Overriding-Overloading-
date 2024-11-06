<?php
class StaticProperties{
    public static $message = "The message Success, Static Property";
    public static function Loop(){
        for($i = 0; $i <= 10; $i++){
            echo "Number Is : {$i} \n";
        }
    }
}
echo StaticProperties::$message; 
echo StaticProperties::Loop(); //Call static Method ,show output in the display;