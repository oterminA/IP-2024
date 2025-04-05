<?php 
    //PROGRAMA frase
    //...
    //String $palabra, $acum

    $acum = "";
    do {
        echo "Ingrese palabra (para finalizar: " . ")\n";
        $palabra = trim(fgets(STDIN));
        $acum= $palabra . " ". $acum;
    } while ($palabra !== ".");
    echo $acum;
?>