<?php

  include 'account.php';
   
  //Definim un compte de client:

  $compteClient = new Account(989796, "Pere", "Riera", 800.50);

  //Rebem entrades del formulari:

  $quantitat = $_POST['quantitat'];
  $operacio = $_POST['opcion'];

  if($operacio == "ingressar") {
      
      if ($quantitat > 0 && $quantitat <= 990 && $quantitat % 5 == 0 ) {

       $compteClient -> deposit($quantitat);

      } else {

        echo "La quantitat indicada no és vàlida. Retiri la targeta i torni a començar.";

      }

  } else if($operacio == "retirar") {

    if ($quantitat > 0 && $quantitat <= 990 && $quantitat % 5 == 0 ) {

      $compteClient -> whithdraw($quantitat);

  } else {

      echo "La quantitat indicada no és vàlida. Retiri la targeta i torni a començar.";

  }
  } else if($operacio == "")  {
     echo "S'ha produït un error. Retiri la targeta i torni a començar." ;
  }

?>

   
