<?php

    //el algoritmo desencripta un número
    //Integer $numero, $u, $d, $c, $m, $num1, $num2, $num3, $num4

    echo "Ingrese el número: \n";
    $numero = trim(fgets(STDIN));
    $u = $numero % 10;
    $d = floor($numero /10) % 10;
    $c = floor($numero /100) % 10;
    $m = floor($numero /1000) % 10;

    $num4 = ($u + 3) % 10 ;
    $num3 = ($d + 3) % 10 ;
    $num2 = ($c + 3) % 10 ;
    $num1 = ($m + 3) % 10 ;
    
    echo "El número " . $numero . " quedaría desencriptado de la siguiente manera: " . $num3 . $num4 . $num1 . $num2 . "\n";
?>