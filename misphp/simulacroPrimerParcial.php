<?php 
//ejercicio 2

//2.a
    /**
     * el modulo devuelve el precio con el descuento aplicado que el cliente debe abonar
     * @param float $elImporte
     * @param int $elPorcentaje
     * @return float
    */

    function descontarPorcentaje($elImporte, $elPorcentaje){
        /*Float $descuento; Float $total*/
        $descuento = (($elPorcentaje / 100) * $elImporte);
        $total = ($elImporte - $descuento);
        return $total;
    }

//2.b
    /**
     * la función utiliza al modulo anterior para realizar el descuento segun el combustible usado
     * @param string $elCombustible
     * @param float $elImporte
     * @return float
    */

    function obtenerMontoFinal($elCombustible, $elImporte){
        /*Float $elDescuento, Float $total*/
        if ($elCombustible == "S"){
            $elDescuento = 15;
        }elseif ($elCombustible == "I"){
            $elDescuento = 10;
        }elseif($elCombustible == "D"){
            $elDescuento = 5;
        }else {
            $elDescuento = 0;
        }
        $total = descontarPorcentaje($elImporte, $elDescuento);
        return $total;
    }

//2.c
    /**
     * la función calcula y devuelve la cantidad de litros usados
     * @param float $elMonto
     * @param string $elCombustible
     * @return float
    */

    function calcularLitros($elMonto, $elCombustible){
        /*Float $costo, Float $litros*/
        if ($elCombustible == "S"){
            $costo= 1059;
        }elseif ($elCombustible == "I"){
            $costo = 1309;
        }elseif($elCombustible == "D"){
            $costo = 1084;
        }else {
            $costo = 1330;
        }
        $litros = round(($elMonto/$costo), 2);
        return $litros;
    }

//2.d
    //PROGRAMA ypf
    //este algoritmo usa tres funciones para calcular el costo del combustible
    //Float $monto; Float $final; Float $litros; String $combustible

    echo "Ingrese el monto en pesos y el tipo de combustible ('S': Super; 'D': Diesel; 'I': Infinia; 'ID': Infinia Diesel) \n";
    $monto = trim(fgets(STDIN));
    $combustible = trim(fgets(STDIN));
    $final = obtenerMontoFinal($combustible, $monto);
    $litros = calcularLitros($final, $combustible);
    echo "El monto final es $" . $final . ", y la cantidad de litros usados es: " . $litros ;