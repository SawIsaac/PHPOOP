<?php 
    class Demo{
        public $name = "mg mg";
        public function __isset($name){
            echo "You are trying to chet the set or not the {$name} property";
        }
    }
    $obj = new Demo();
    isset($obj->age)
?>