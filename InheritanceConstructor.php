<?php
class Father{
    public function __construct(){
        echo "This is father Constructor \n";
    }
}

class son{
    public function __construct(){
        echo "This is Son Constructor \n";
    }
}

new Father();
new son();
// $objectName = new Father();
// $objectName->__construct();