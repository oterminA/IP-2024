<?php

    //PROGRAMA suma
    //suma nros
    //Int $cant, $nro, $suma

    $suma = 0;
    echo "Cuantos nros desea ingresar? \n";
    $cant = trim(fgets(STDIN));
    for ($i = 1; $i <= $cant; $i++){
        echo "Ingrese el nro $i: \n";
        $nro = trim(fgets(STDIN));
        $suma = $suma + $nro;
    }
    echo $suma;

?>