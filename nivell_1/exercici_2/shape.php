<?php
  
    abstract class Shape {
     

        protected float $base;
        protected float $height;
        

        public function __construct (float $base, float $height) {

            $this -> base = $base;
            $this -> height = $height; 

        }

        protected abstract function calculateArea():float;


    }


?>