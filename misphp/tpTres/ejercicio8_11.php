<?php

    //este algoritmo calcula la edad del usuario
    //Integer $nacimiento, $anioActual, $edad

    echo "Ingrese el año del nacimiento y el año actual: \n";
    $nacimiento = trim(fgets(STDIN)) ;
    $anioActual = trim(fgets(STDIN));
    $edad = ($anioActual - $nacimiento) ;
    echo "El usuario tiene " . $edad . " años.";

?>