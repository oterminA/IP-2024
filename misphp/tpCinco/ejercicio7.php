<?php

    /**
     * este modulo calcula el alquiler de un auto
     * @param float $losKm
     * @return float
    */

    function modAlquiler($losKm){
        /*Float $elCosto*/
        if ($losKm <300){
            $elCosto = 850;
        }elseif (($losKm >= 300) && ($losKm < 1000)){
            $adicional = ($losKm - 300) * 10.5;
            $elCosto = (850 + $adicional);
        }else {
            $adicional = ($losKm - 1000) * 8.5;
            $elCosto = (850+7350+$adicional);            
        }
        return $elCosto;
    }

    /**
     * el modulo calcula cuanto corresponde al IVA
     * @param float $elCosto
     * @return float
    */

    function modImpuesto($elCosto){
        /*Float $elIva*/
        $elIva = round(((21* $elCosto) / 121),2);
        return $elIva;
    }

    //PROGRAMA alquileres
    //el algoritmo usa dos modulos para calcular el IVA y el alquiler de autos
    //Float $km, $calcAlquiler, $iva

    echo "Ingrese los km recorridos: \n";
    $km = trim(fgets(STDIN));
    $calcAlquiler = modAlquiler($km);
    $iva = modImpuesto($calcAlquiler);
    echo "El monto total a pagar por el alquiler es $" . $calcAlquiler . ", siendo el costo incluido del IVA $" . $iva ;
?>