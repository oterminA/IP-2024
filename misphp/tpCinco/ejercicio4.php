<?php
    
    //PROGRAMA capicula
    //el algoritmo analiza nros y ve si son capicua o no
    //Int $nro, $cant, $u, $d, $c

    echo "Ingrese el nro y la cantidad de digitos que tiene: \n";
    $nro = trim(fgets(STDIN));
    $cant = trim(fgets(STDIN));
    if ($cant == 3) {
        $u = $nro % 10;
        $d = (floor($nro / 10) % 10);
        $c = (floor($nro / 100) % 10);
        if ($u == $c) {
            echo $nro . " es capicua. \n";
        }else {
            echo $nro . " no es capicua. \n";
        }
    }else {
        echo "Error, debe ser un numero de 3 cifras.";
    }
?>