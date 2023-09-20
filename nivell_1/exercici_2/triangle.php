<?php

   
    class Triangle extends Shape {

        
        public function calculateArea():float {
    
            $area = ($this -> base * $this -> height)/2;
        
            return $area;
        }
    

    }


?>
  