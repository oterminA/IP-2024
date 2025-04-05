<?php

    //ALGORITMO vocales
    //...
    //String $letra; Int $j

    $j = 0;

    do {
        echo "Ingrese letra: (corta con -)\n";
        $letra = trim(fgets(STDIN));
        switch ($letra) {
            case "a": 
                $j = $j +1;
                break;
            case "e": 
                $j = $j +1;
                break;
            case "i": 
                $j = $j +1;
                break;
            case "o": 
                $j = $j +1; 
                break;
            case "u": 
                $j = $j +1; 
                break;
        }
    } while ($letra !== "-");
    echo "Cantidad vocales: " . $j;

?>