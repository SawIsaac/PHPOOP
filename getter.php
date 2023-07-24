<?php 
    class Demo{
        private $num = 777;
        public function getData(){
            return $this->num;
        }
    }
    $objDemo = new Demo();
    echo $objDemo->getData();
?>