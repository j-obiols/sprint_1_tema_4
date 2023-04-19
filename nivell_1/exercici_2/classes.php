<?php
  
  class Shape {
    
    //atributs de classe

    protected $base;
    protected $altura;
    protected $area;

    //mètodes de classe

    public function __construct (int $ba, int $al) {
      $this -> base = $ba;
      $this -> altura = $al; 
    }
  }


  class Triangle extends Shape {
      
    public function areaTriangle() {

      $this -> area = ($this -> base * $this -> altura)/2;

      echo 'ÀREA TRIANGLE = '.$this ->area. ' u2 <br>';
    }

  }

  class Rectangle extends Shape {
      
    public function areaRectangle() {

      $this -> area = ($this -> base * $this -> altura);

      echo 'ÀREA RECTANGLE = '.$this ->area. ' u2 <br>';
    }

  }

?>