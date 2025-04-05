<?php

    //PROGRAMA factorial
    //factorial de nros
    //Int $nro, $factorial

    $factorial = 1;

    echo "Ingrese el nro para obtener su factorial: \n";
    $nro = trim(fgets(STDIN));
    for ($i=1; $i <= $nro; $i++){
        $factorial = $factorial * $i;
    }
    echo $factorial;

?>