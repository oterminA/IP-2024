<?php

    //este algoritmo cambia el valor de dos variables
    //Integer $var1, $var2, $aux

    echo "Ingrese los valores: \n";
    $var1 = trim(fgets(STDIN));
    $var2 = trim(fgets(STDIN));
    $aux = $var1 ;
    $var1 = $var2;
    $var2 = $aux;
    echo "El valor de la primera variable es: " . $var1 . " y el valor de la segunda variable es: " . $var2 ;

?>