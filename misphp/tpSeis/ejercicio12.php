<?php

    //PROGRAMA frase
    //...
    //String $palabra, $frase

    $frase = "";
    do {
        echo "Ingrese palabra (para finalizar: " . ")\n";
        $palabra = trim(fgets(STDIN));
        $frase = $frase . " " . $palabra;
    } while ($palabra !== ".");
    echo $frase;
?>