<?php

    //PROGRAMA sumas
    //suma
    //Int $i, $nro, $suma

    $i=1;
    $suma=0;

    echo "Ingrese un nro para sumar sus anteriores: \n";
    $nro = trim(fgets(STDIN));
    do {
        $suma = $suma + $i;
        $i = $i +1;
    } while ($i <= $nro);
    echo $suma;

?>