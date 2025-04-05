<?php

    //este algoritmo calcula cuanto abona el usuario al banco dependiendo de la calntidad de cuotas y el porcentaje en cada una
    //Float $monto, $cuotas, $interes, $calculoInteres, $montoMensual, $resultado

    echo "Ingrese la cantidad de dinero, de cuotas y el porcentaje de interés a aplicar: \n";
    $monto = trim(fgets(STDIN));
    $cuotas = trim(fgets(STDIN));
    $interes = trim(fgets(STDIN));
    $calculoInteres = ($interes/100) + 1;
    $montoMensual = ($monto/$cuotas) ;
    $resultado = round($montoMensual * $calculoInteres);
    echo "En cada cuota el usuario deberá abonar un total de $" . $resultado;

?>