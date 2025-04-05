<?php

    //Este algoritmo calcula el promedio de tres notas
    //Integer $a, $b, $c; Float $promedio

    echo "Ingrese las notas: \n";
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $c = trim(fgets(STDIN));
    $promedio = ($a+$b+$c) / 3 ;
    echo "El promedio de las notas es: " . $promedio ;

?>