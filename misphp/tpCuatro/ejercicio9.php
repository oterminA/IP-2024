<?php

    /**
     * este modulo calcula si un numero es multiplo de otro
     * @param int $numA
     * @param int $numB
     * @return int
    */

    function modEsMultiplo($numA,$numB) {
        /*Int $calculo*/
        $calculo = $numA % $numB == 0 ;
        return $calculo ;
    }

    //PROGRAMA multiplo
    //el algoritmo usa un modulo para calcular si un nro es multiplo de otro
    //Int $dividendo, $divisor; String $mensaje

    echo "Ingrese el dividendo y el divisor: \n";
    $dividendo = trim(fgets(STDIN));
    $divisor = trim(fgets(STDIN));
    $mensaje = modEsMultiplo($dividendo, $divisor) ? "Es multiplo \n" : "No es multiplo \n";
    echo $mensaje;
?>