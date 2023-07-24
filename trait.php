<?php 
    trait First{
        public $name = "aung aung";
        public function doSomething(){
            echo "Do something";
        }
    }

    trait Second{
        public $age = 22;
    }

    class Test{
        use First,Second;
    }

    $obj = new Test();
    $obj->doSomething();

?>