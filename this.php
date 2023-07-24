<?php 
    class Person{
        public $name = "Mg Mg";
        public $age = 30;
        public function changeName(){
            $this->name = "Aung Aung";
        }

        public function Name(){
            $this->name = "Mg Aung";
        }
    }

    // $obj = new Person();
    // $obj->name;

    $otherObj = new Person();
    echo $otherObj->name;
    echo '<br>';

    $otherObj->changeName();
    echo $otherObj->name;
    echo '<br>';

    $otherObj->Name();
    echo $otherObj->name;
?>