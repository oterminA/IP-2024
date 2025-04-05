<?php

    /**
     * calcula IMC
     * @param float $laAlt
     * @param float $elPeso
     * @return float
    */

    function modImc($laAlt, $elPeso){
        /*Float $calculo*/
        $calculo = ($elPeso / pow($laAlt,2));
        return $calculo;
    }

    /**
     * categoriza el IMG
     * @param float $resultado
     * @return string 
    */

    function modCategoriaImc($resultado){
        /*String $elImc*/
        if ($resultado < 18.50) {
            $elImc = "Bajo peso";
        }elseif ($resultado >= 18.50 && $resultado <= 24.99) {
            $elImc = "Normal";
        }elseif($resultado >= 25.00 && $resultado <= 29.99) {
            $elImc = "Sobrepeso";
        }elseif($resultado >= 30.00 && $resultado <= 34.99) {
            $elImc = "Obesidad leve";
        }elseif($resultado >= 35.00 && $resultado <= 39.99) {
            $elImc = "Obesidad media";
        }else{
            $elImc = "Obesidad mórbida";
        }
        return $elImc;
    }

    //PROGRAMA calculoImc
    //el algoritmo usa modulos para calcular el IMC del usuario
    //Float $altura, $peso, $imc; String $categoria

    echo "Ingrese la altura y el peso del usuario: \n";
    $altura = trim(fgets(STDIN));
    $peso = trim(fgets(STDIN));
    $imc = modImc($altura, $peso);
    $categoria = modCategoriaImc($imc);
    echo "IMC: " . $categoria;

?>