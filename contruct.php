<?php  
    class Member{
        public function __construct(){
            echo "this is member constructur method";
        }
    }

    class GoldMember extends Member{
        public function __construct(){
            parent::__construct();
            echo "this is Gold Member constructur method";
        }
    }

    new GoldMember();


    //destruct method
?>