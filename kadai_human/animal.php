<?php
    class Animal {
        protected $name;
        protected $age; 
    /*  
        function __construct($name="",$age="") {
            $this->name = $name;
            $this->age =$age;
        }
    */
        function say() {
            echo $this->name,"です。",$this->age,"歳です。<br>";
        }
    }
    