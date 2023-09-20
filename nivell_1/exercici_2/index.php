<?php

    include 'rectangle.php'; 
    include 'triangle.php'; 


    echo "TEMA 4 : PHP I OBJECTES\n";
    echo "NIVELL 1 - EXERCICI 2\n";

    echo "\n";
    
    $rectangle = new Rectangle (12.25, 3.4678);

    echo "Rectangle Area = ".round($rectangle -> calculateArea(),2)." u²\n";

    echo "\n";

    $triangle = new Triangle (12.25, 3.4678);
    
    echo "Triangle Area = ".round($triangle -> calculateArea(),2)." u²\n";

    echo "\n";

    

?>