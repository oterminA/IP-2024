<?php

    //PROGRAMA impares
    //suma impares entre dos nros
    //Int $a, $b, $acumIm

    $acumIm = 0;

    echo "Ingrese los dos numeros A, y B: \n";
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    // for ($i = $a+1; $i < $b; $i++){
    //     if ($i % 2 !== 0) {
    //         $acumIm = $acumIm + $i;
    //     }
    // }
    // echo "Nro minimo: ". $a. "\n Nro maximo: ". $b. "\n La suma es: ". $acumIm;


    ////otra forma (y más eficaz) de hacerlo es:
        ///...
        if ($a % 2 == 0) {
            $a = $a + 1;
        }else {
            $a = $a + 2;
        }

        for ($i = $a; $i < $b; $i=$i+2) {
            $acumIm = $acumIm + $i;
        }
        echo $acumIm;

?>