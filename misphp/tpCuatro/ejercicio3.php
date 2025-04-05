<?php
    //PROGRAMA principal
    //este programa realiza calculos usando funciones predeterminadas de PHP

    echo "Ingrese los números a evaluar: \n";
    $numA =  trim(fgets(STDIN));
    $numB =  trim(fgets(STDIN));
    $calculo = pow($numA, $numB) + sqrt(abs($numA));
    echo "El resultado es: " . $calculo . "\n";

?>