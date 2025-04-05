<?php

    //el algoritmo pasa de segundos a hs,min, segundos
    //Integer $segundos, $horas, $resto, $minutos, $sg

    echo "Ingrese los segundos: \n";
    $segundos = trim(fgets(STDIN));
    $horas = floor($segundos / 3600) ;
    $resto = ($segundos % 3600);
    $minutos = floor($resto / 60) ;
    $sg = ($resto % 60) ;
    echo "Los segundos ingresados se convierten en " . $horas . ":" . $minutos . ":" . $sg . "\n";

?>
