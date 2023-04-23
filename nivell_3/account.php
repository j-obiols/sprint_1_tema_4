<?php
    
    class Account {

        //Atributs de classe

        private $numCompte;
        private $nomClient;
        private $cognomClient;
        private $saldoActual;

        public function __construct(int $numC, string $nomC, string $cognomC, float $saldA) {
            $this -> numCompte = $numC;
            $this -> nomClient = $nomC;
            $this -> cognomClient = $cognomC;
            $this -> saldoActual = $saldA;
        }

        //Getters

        public function getNumCompte(){
            return $this->numCompte;
        }

        public function getNomClient(){
            return $this->nomClient;
        }

        public function getCognomClient(){
            return $this->cognomClient;
        }
        
        public function getSaldoActual(){
            return $this->saldoActual;
        }

        //Setters

        public function setNumCompte($nC){
        $this -> numCompte = $nC;
        }
        
        public function setNomClient($noC){
            $this -> nomClient = $noC;
        }

        public function setCognomClient($cC){
            $this -> cognomClient = $cC;
        }

        public function setSaldoActual($sA){
            $this -> saldoActual = $sA;
        }
        
        public function deposit(int $amount) {

            $this -> setSaldoActual($this -> getSaldoActual() + $amount);

            echo "Ha ingressat ".$amount." €. <br> El seu saldo actual és de ".number_format($this -> getSaldoActual(),2)." €.";

        }

        public function whithdraw(int $amount) {
        
            if($this -> getSaldoActual() >= $amount) {

                $this -> setSaldoActual($this -> getSaldoActual() - $amount);
                
                echo "Ha retirat ".$amount." €. <br>El seu saldo actual és de ".number_format($this -> getSaldoActual(),2)." €.";

            } else {
                echo "El seu saldo actual no permet retirar la quantitat sol·licitada.";
            }  
        }

    }

?>