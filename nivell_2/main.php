<?php

    include('dice.php');
     
    echo "SRINT 1 - TEMA 4 <br> ";
    echo "NIVELL 2  - EXERCICI 1 <br>";
    echo "<br> <br>";

    //Definim la funció Partida amb un cubilet de 5 daus:
    
    function Partida(pokerDice $a, pokerDice $b, pokerDice $c, pokerDice $d, pokerDice $e, int $maxTiradas) {
       
        $numTiradas = 0;

        for($f = 0; $f < ($maxTiradas-1); $f++) {
            $numTiradas;
            tirarCubilete($a, $b, $c, $d, $e);
                //alternativa a línea anterior para comprobar por pantlalla la lógica del juego:
                //ultimaTirada($a, $b, $c, $d, $e);
            $numTiradas++;
            echo "<br> Tirada nº ".$numTiradas." completada.<br>";
        }

        $numTiradas++;
        echo "<br> Éstos son los resultados de la tirada nº ".$numTiradas.": <br>";
        ultimaTirada($a, $b, $c, $d, $e);
        

        echo "<br> <br> He tirado el cubilete ".$numTiradas." veces. <br>
        Entre todos los dados se han efectuado ".getTotalThrows($numTiradas)." tiradas. <br>";
        
    } 

    //Instanciem 5 objectes dau:

    $dau1 = new PokerDice();
    $dau2 = new PokerDice();
    $dau3 = new PokerDice();
    $dau4 = new PokerDice();
    $dau5 = new PokerDice();

    echo "Jugaremos una partida de 10 tiradas: <br>";
    Partida($dau1, $dau2, $dau3, $dau4, $dau5, 10);

?>