<?php

    /**
     * este modulo indica si un nro es par
     * @param int $elNum
     * @return boolean
    */

    function modEsPar($elNum) {
        /*Boolean $calculo*/
        $calculo = ($elNum % 2 == 0);
        return $calculo;
    }

    //PROGRAMA par
    //el algoritmo usa un modulo para saber si un nro es par
    //Int $numero

    echo "Ingrese el numero: \n";
    $numero = trim(fgets(STDIN));
    if (modEsPar($numero)) {
        echo "El nro " . $numero . " es par.\n";
    }else{
        echo "El nro " . $numero . " no es par.\n";
    }

?>