<?php

    //PROGRAMA principal
    //suma y promedia sueldos
    //String $rta; Int $i; Float $sueldo, $suma, $promedio

    $i = 0;
    $suma = 0 ;

    echo "Desea ingresar un sueldo? (s/n) \n";
    $rta = trim(fgets(STDIN));
    while ($rta !== "n") {
        echo "Sueldo: \n";
        $sueldo = trim(fgets(STDIN));
        $i = $i +1;
        $suma = $suma + $sueldo ;
        echo "Desea ingresar otro sueldo? (s/n) \n";
        $rta = trim(fgets(STDIN));
    }
    $promedio  = $suma / $i;
    echo "El promedio es: " . $promedio;
?>