<?php 
//declaer class
    class Person{
        public $name = "Kyaw Kyaw";
        public $age = 25;

        //Declaring Method
        public function eat($shop="Inyar Lake"){
            //code 
            echo "Loteria Fired Chicken".$shop;
        }
        public function swimming(){
            //code
            echo "Pool";
        }
    }

    //Declaring Object
    $personObj = new Person();
    echo $personObj->name;
    //method
    echo $personObj->swimming();

    //parameter method
    echo $personObj->eat('value');

    //method overloading    
    echo $personObj->eat();
    echo $personObj->eat('Hlaedan');
?>