<?php

    $titol1 = "TEMA 4 : PHP I OBJECTES";
    $titol2 = "NIVELL 1 - EXERCICI 1";

    echo $titol1."<br>";
    echo $titol2."<br>";
    echo "<br>";


    class Employee {

        //atributs de classe
        private $nom;
        private $sou;
        
        //mètodes
        public function initialize (string $no, int $so) {
          $this -> nom = $no;
          $this -> sou = $so;
        }

        public function print() {
            echo $this -> nom.".";
            echo '<br>';
            if($this -> sou > 6000 ) {
                echo 'Ha de pagar impostos.';
                echo '<br>';
            } else {
                echo 'No ha de pagar impostos.';
                echo '<br>';
            }
        }
    }

    //Creació i assignació d'objectes

    $employee1 = new Employee();
    $employee1 -> initialize ('Carles', 4500);
    $employee2 = new Employee();
    $employee2 -> initialize('Maria', 6500);
    $employee3 = new Employee();
    $employee3 -> initialize('Enric', 7800);


    $employee1 -> print();
    echo "<br>";
    $employee2 -> print();
    echo "<br>";
    $employee3 -> print();
    echo "<br>";


?>