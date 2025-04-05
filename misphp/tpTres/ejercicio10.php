<?php

    //este algoritmo calcula la velocidad
    //Float $distancia, $tiempo, $velocidad

    echo "Ingrese la distancia en horas y el tiempo en km: \n";
    $distancia = trim(fgets(STDIN));
    $tiempo = trim(fgets(STDIN));
    $velocidad = ($distancia/$tiempo);
    echo "La velocidad sería: " . $velocidad . "km/h \n";

?>