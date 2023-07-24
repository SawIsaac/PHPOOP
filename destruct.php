<?php 
        class Member{
            public $result = 0;
            public function sum($num1,$num2){
                $this->result=$num1/$num2;
            }
            
            public function __destruct(){
                echo "This is result = ".$this->result;
            }
        }
        $obj = new Member();
        $obj->sum(50,2);
?>