<?php 
    class Member{
        public $name = "Kyaw Kyaw";
        protected $age = 26;
        public $education = "B.C.SC";
        public function friendCount(){
            echo "this is friend method";
        }
    }
    
    class GoldMember extends Member{  
        public $coin = 34;
        public function changeAge(){
           return $this->age=27;  
        }
    }

    class DiamondMember extends Member{
        public $diamond =23;
        public function friendCount(){
            echo "Something method";
        }
    }

    $objGoldMember = new GoldMember();
    echo $objGoldMember->changeAge();
    // echo $objGoldMember->friendcount();


?>