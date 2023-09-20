<?php

    include 'shape.php';


    class Rectangle extends Shape {


        public function calculateArea():float {
            
            $area = $this -> base * $this -> height;
            
            return $area;

        }

    }

?>