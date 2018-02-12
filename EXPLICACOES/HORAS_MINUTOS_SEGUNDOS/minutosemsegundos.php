<?php 

    print("Informe o valor de hora \n");
    $hora = fgets(STDIN); //HORA

    print("Informe o valor de minutos \n");
    $minutos = fgets(STDIN); //MINUTOS

    print("Informe o valor de segundos \n");
    $segundos = fgets(STDIN); //SEGUNDOS

    $A = $hora * 3600;

    $B = $minutos * 60;

    $C = $segundos;

    $SOMA= $A + $B + $C;

    print("o valor total é ". $SOMA . " segundo\n");

?>