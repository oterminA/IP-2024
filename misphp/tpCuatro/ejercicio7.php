<?php

    /**
     * este modulo calcula la cantidad de agua destilada
     * @param float $cantLoratadina
     * @param float $cantBetametasona
     * @return float
    */

    function modCalcAguaDestilada($cantLoratadina, $cantBetametasona) {
        /*Float $porcentajeL, $porcentajeB, $calculo*/
        $porcentajeL = $cantLoratadina * 0.10;
        $porcentajeB = $cantBetametasona * 0.15;
        $calculo = $porcentajeL + $porcentajeB;
        return $calculo;
    }

    //PROGRAMA aguaDestilada
    //este programa usa un modulo para calcular la cantidad de agua destilada
    //Float $loratadina, $betametasona, $destilada

    echo "Ingrese las cantidades de Loratadina y Betametasona: \n";
    $loratadina = trim(fgets(STDIN));
    $betametasona = trim(fgets(STDIN));
    $destilada = modCalcAguaDestilada($loratadina, $betametasona);
    echo "La cantidad de agua destilada es: " . $destilada ;


?>