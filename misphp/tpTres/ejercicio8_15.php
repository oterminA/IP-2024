<?php

    //este algortimo hace el teorema de pitágoras y calcula la distancia en linea recta entre dos puntos
    //Float $a, $b, $calculo, $resultado

    echo "Ingrese las distancias de ambos puntos: \n";
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $calculo = pow($a,2) + pow($b,2);
    $resultado = floor(sqrt($calculo));
    echo "En línea recta se caminarían " . $resultado . " metros. \n";

?>