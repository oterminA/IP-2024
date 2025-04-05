<?php

    //PROGRAMA numeros
    //nros menores positivos al ingresado
    //Int $nro
    $nro = 0;
    echo "Ingrese un nro:\n";
    $nro= trim(fgets(STDIN));
    for ($i=1; $i < $nro ; $i++) { 
        echo $i . "\n";
    }
    echo "Fin.";
?>