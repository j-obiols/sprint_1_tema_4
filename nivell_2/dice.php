<?php
     
    class PokerDice {
       
       private $cares = array();
       

       function __construct() {
            $this -> cares[0] = "As";
            $this -> cares[1] = "K";
            $this -> cares[2] = "Q";
            $this -> cares[3] = "J";
            $this -> cares[4] = "7";
            $this -> cares[5] = "8";
        }
        

        public function throwDice() {
           $resultat = array_rand($this -> cares, 1);
           return $resultat;
        }

        public function shapeName($resultat) {
            return $this -> cares[$resultat];
        }
    }


    function getTotalThrows($numTir) {

        $totalThrows = $numTir*5;

        return $totalThrows;
    }

    
    function tirarCubilete(pokerDice $a, pokerDice $b, pokerDice $c, pokerDice $d, pokerDice $e) {
        $a -> throwDice();
        $b -> throwDice();
        $c -> throwDice();
        $d -> throwDice();
        $e -> throwDice();
    }


    function ultimaTirada($a, $b, $c, $d, $e) {
        echo $a -> shapeName($a -> throwDice()). " - ";
        echo $b -> shapeName($b -> throwDice()). " - ";
        echo $c -> shapeName($c -> throwDice()). " - ";
        echo $d -> shapeName($d -> throwDice()). " - ";
        echo $e -> shapeName($e -> throwDice());
    }

?>