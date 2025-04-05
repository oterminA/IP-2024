<?php

    //este algortimo calcula que porcentaje representa un numero de otro
    //Integer $a, $b ; Float $porcentaje

    echo "ingrese los números a calcular: \n";
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $porcentaje = ($a / $b) * 100 ;
    echo "El porcentaje que " . $a . " representa de " . $b . " es: " . $porcentaje . "%";

?>