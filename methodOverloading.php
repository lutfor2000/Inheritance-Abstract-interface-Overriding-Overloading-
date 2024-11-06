<?php

Class Gadha{
    public function __call($name , $arguments){
        print_r($arguments);
    }
}
$objectName = new Gadha();
$objectName->kadir("lutfor Rhaman Shanto");
$objectName->rat("Form Bangladesh");
$objectName->ara("A","B");
