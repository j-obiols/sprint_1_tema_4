<?php
    include ('classes.php'); 

    $titol1 = "TEMA 4 : PHP I OBJECTES";
    $titol2 = "NIVELL 1 - EXERCICI 2";

    echo $titol1."<br>";
    echo $titol2."<br>";

    echo "<br>";
    echo "<br>";
    
    $triangle1 = new Triangle (12,3);
    $triangle1 -> areaTriangle();

    echo "<br>";
    echo "<br>";

    $rectangle1 = new Rectangle (12, 3);
    $rectangle1 -> areaRectangle();

?>