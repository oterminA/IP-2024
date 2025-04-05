<?php

    /**
     * este modulo calcula si un numero es multiplo de 2
     * @param int $num
     * @return boolean
    */

    function modEsMultiploDe2($num) {
        /*Boolean $multiplo*/
        $multiplo = $num % 2 == 0 ;
        return $multiplo;
    }




    //PROGRAMA esMultiplo
    //este algoritmo usa un modulo para calcular si un numero es multiplo de 2
    //Boolean $calculo; String $mensaje; Integer $numero

    echo "Ingrese el número a evaluar: \n";
    $numero = trim(fgets(STDIN));
    $calculo = modEsMultiploDe2($numero) ;
    $mensaje = $calculo ? "El numero " . $numero . " es multiplo de 2 \n" : "El numero " . $numero . " no es multiplo de 2 \n" ; 
    echo $mensaje;

?>
