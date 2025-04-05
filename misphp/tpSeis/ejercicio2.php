<?php

    //PRINCIPAL sumatoria
    //pide y suma nros
    //Int $nro
    $nro = 1;
    $suma = 0;
    while ($nro != 0) {
        echo "Ingrese un nro: \n";
        $nro = trim(fgets(STDIN));
        $suma = $suma + $nro;
    }
    echo $suma;
?>