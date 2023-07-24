<?php 
    class Demo1{
        private $number = 222;
        public function setData($data){
            $this->number=111;
        }
        public function getData(){
            return $this->number;
        }
    }

    $objDemo1 = new Demo1();
    // echo $objDemo1->number;
    // echo "<br>";
    $objDemo1->setData('111');
    echo $objDemo1->getData();

?>