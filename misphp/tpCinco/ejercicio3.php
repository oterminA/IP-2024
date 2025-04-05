<?php

    /**
     * este modulo calcula si una nota está aprobada o no
     * @param float $laNota
     * @return boolean
    */

    function modNotas($laNota) {
        /*Boolean $calculo*/
        $calculo = ($laNota >=4 && $laNota <= 10);
        return $calculo;
    }

    //PROGRAMA notas
    //el algortimo evalua si una nota está o no aprobada
    //Float $nota
    
    echo "Ingrese la nota: \n";
    $nota = trim(fgets(STDIN));
    if ($nota < 0 || $nota > 10) {
        echo "Nota inválida.";
    }else {
        if (modNotas($nota)) {
            echo "Aprobó.";
        }else {
            echo "Desaprobó.";
        }
    }
?>