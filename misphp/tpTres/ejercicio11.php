<?php

    //este algoritmo encripta números
    //Integer $numero, $u, $d, $c, $m, $num1, $num2, $num3, $num4

    echo "Ingrese el número: \n";
    $numero = trim(fgets(STDIN));
    $u = $numero % 10;
    $d = floor($numero /10) % 10;
    $c = floor($numero /100) % 10;
    $m = floor($numero /1000) % 10;
    /*para verificar si cada digito está bien se puede hacer un echo \n después de cada operación*/
    $num4 = ($u + 7) % 10 ;
    $num3 = ($d + 7) % 10 ;
    $num2 = ($c + 7) % 10 ;
    $num1 = ($m + 7) % 10 ;
    echo "El número " . $numero . " quedaría encriptado de la siguiente manera: " . $num3 . $num4 . $num1 . $num2 . "\n";

    ////OTRA FORMA DE HACERLO ES:
    echo "Ingrese el número: \n";
    $numero = trim(fgets(STDIN));
    $dig4 = $numero % 10;
    $dig3 = floor($numero /10) % 10;
    $dig2 = floor($numero /100) % 10;
    $dig1 = floor($numero /1000) % 10;

    $dig1 = ($dig1 + 7) % 10 ;
    $dig2 = ($dig2 + 7) % 10 ;
    $dig3 = ($dig3 + 7) % 10 ;
    $dig4 = ($dig4 + 7) % 10 ;

    $aux = $dig1;
    $dig1 = $dig3;
    $dig3 = $aux;
    
    $aux = $dig2;
    $dig2 = $dig4;
    $dig4 = $aux;

    $nro = (($dig1 * 1000)+ ($dig2*100) + ($dig3*10) + $dig4);
    echo "El nro encriptado es: " . $nro ;
?>