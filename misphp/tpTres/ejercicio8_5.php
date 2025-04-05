<?php

    //este algortimo calcula un porcentaje
    //Float $sueldoInicial, $sueldoDeseado, $diferencia, $porcentaje

    echo "Ingrese el sueldo inicial y el sueldo deseado: \n" ;
    $sueldoInicial = trim(fgets(STDIN));
    $sueldoDeseado = trim(fgets(STDIN));
    $diferencia = ($sueldoDeseado - $sueldoInicial) ;
    $porcentaje = ($diferencia * 100) / $sueldoInicial ;
    echo "El porcentaje que debe aplicarse para pasar de $" . $sueldoInicial . " a $" . $sueldoDeseado . " es el " . $porcentaje . "%" ;

?>