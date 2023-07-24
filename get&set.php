<?php 
    class Test{
        public $name = "Mg mg";
        public function __get($property){
            echo "You are trying to get {$property} property that doesn't exist.";
        }
    }

    $obj = new Test();
    echo $obj->age;


    class SetClass{
        public $education ="B.C.Sc";
        public function __set($propertyname,$value){
            echo "You are trying to get {$propertyname} property with value {$value} that doesn't exist.";
        }
    }

    $otherObj = new SetClass();
    $otherObj->education="mg mg";
    echo $otherObj->education;
?>