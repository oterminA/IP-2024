<?php

    //este algortimo pasa segundos a minutos
    //Integer $segundos; Float $min, $resto

    echo "Ingrese los segundos a convertir: \n";
    $segundos = trim(fgets(STDIN));
    $min = floor($segundos/60);
    $resto = ($segundos % 60);
    echo "Los segundos quedarian expresados como " . $min . ":" . $resto;

?>