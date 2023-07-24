<?php
    class Demo{
        public $name = "mg mg";
        // public function __call($name,$arguments){
        //     echo "You are trying to call method {$name} with a value of ";
        //     echo "<pre>".print_r($arguments)."</pre>";
        // }
        // public function __callStatic($name,$arguments){
        //     echo "You are trying to call static method {$name} with a value of ";
        //     echo "<pre>".print_r($arguments)."</pre>";
        // }
        public function __toString(){
            return "This class have no properties method.";
        }
        public function __invoke(){
            return "You are trying to call object as method.";
        }
    }

    // $obj = new Demo();
    // $obj->hello("mother lover"); 

    // Demo::hello();

    $obj = new Demo();
    echo $obj();
?>