<?php

    //el algoritmo calcula el IMC de una persona
    //Float $peso, $altura, $resultado

    echo "Ingrese el peso en KG y la altura en metros: \n";
    $peso = trim(fgets(STDIN));
    $altura = trim(fgets(STDIN));
    $resultado = floor($peso / pow($altura,2));
    echo "El IMC para los datos ingresados es de: " . $resultado;

?>