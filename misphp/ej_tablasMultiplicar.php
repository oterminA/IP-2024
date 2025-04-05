<?php

    //PROGRAMA principal
    //según el nro elegido por el usuario, el algoritmo realiza la tabla de multiplicar
    //Int $i, $nro

    echo "Ingrese numero para obtener su tabla de multiplcar:\n";
    $nro = trim(fgets(STDIN));
    for ($i = 1; $i <= 10; $i++){
        echo $nro . "*" . $i . "=" . ($nro*$i) . "\n";
    }
    echo "Fin tabla de multiplicar.\n";

?>