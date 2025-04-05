<?php

    //este algortimo calcula el resto de una division
    //Integer $num1, $num2, $cociente, $resto

    echo "Escriba los numeros a evaluar: \n";
    $num1 = trim(fgets(STDIN));
    $num2 = trim(fgets(STDIN));
    $cociente = floor ($num1 / $num2) ;
    $resto = $num1 - ($num2 * $cociente);
    echo "El resto de la división entre " . $num1 . " y " . $num2 . " es: " . $resto . "\n" ;

?>