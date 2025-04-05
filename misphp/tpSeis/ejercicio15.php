<?php

    //PROGRAMA palabras
    //...
    //Int $cant; String $palabra

    echo "Cuantas palabras desea ingresar?\n";
    $cant = trim(fgets(STDIN));
    for ($i = 1; $i <= $cant; $i++){
        echo "Ingrese palabra: \n";
        $palabra = trim(fgets(STDIN));
        echo "Su palabra nro " . $i . ": " . $palabra . "\n" ;
    }

?>