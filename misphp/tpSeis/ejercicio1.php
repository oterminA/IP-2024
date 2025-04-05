<?php

    //PROGRAMA pares
    //muestra nros pares
    //Int $nro

    echo "Ingrese el numero: \n";
    $nro = trim(fgets(STDIN));
    for ($i=0; $i <= $nro; $i= $i+2) { 
        echo $i . "\n";
    }

?>