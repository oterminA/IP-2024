<?php

    /**
     * modulo que segun el mes, retorna el valor del factor
     * @param string $elMes
     * @return int
    */

    function modFactor($elMes){
        /*Int $elFactor*/
        if (($elMes == "Enero") || ($elMes == "Febrero") || ($elMes == "Marzo")) {
            $elFactor = 15;
        }elseif (($elMes == "Abril") || ($elMes == "Mayo") || ($elMes == "Junio")) {
            $elFactor = 17;
        }elseif (($elMes == "Julio") || ($elMes == "Agosto")) {
            $elFactor = 19;
        }elseif (($elMes == "Septiembre") || ($elMes == "Octubre") || ($elMes == "Noviembre")) {
            $elFactor = 20;
        }else {
            $elFactor = 21;
        }
        return $elFactor;
    }

    //PROGRAMA mesFactor
    //el algoritmo usa un modulo para retornar el factor segun el mes y calcula la productividad
    //Int $factor, $calculo, $mes, $cant

    echo "Ingrese el mes y la cantidad de articulos producidos: \n";
    $mes = trim(fgets(STDIN));
    $cant = trim(fgets(STDIN));
    $factor = modFactor($mes);
    $calculo = ($factor * $cant);
    echo "En el mes de " . $mes . " la productividad es: " . $calculo ;
?>