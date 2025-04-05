<?php

    //PROGRAMA edades
    //este algoritmo compara edades segun lo ingresado
    //String $p1, $p2, $p3; int $edad1, $edad2, $edad3

    echo "Ingrese el nombre y la edad de la 1° persona: \n";
    $p1 = trim(fgets(STDIN));
    $edad1 = trim(fgets(STDIN));
    echo "Ingrese el nombre y la edad de la 2° persona: \n";
    $p2 = trim(fgets(STDIN));
    $edad2 = trim(fgets(STDIN));
    echo "Ingrese el nombre y la edad de la 3° persona: \n";
    $p3 = trim(fgets(STDIN));
    $edad3 = trim(fgets(STDIN));
    if ($edad1==$edad2){
            echo $p1 . " y " . $p2 . " son contemporaneos. \n";
    }elseif ($edad1 = $edad3) {
            echo $p1 . " y " . $p3 . " son contemporáneos. \n";
    }elseif ($edad2 == $edad3){
            echo $p2 . " y " . $p3 . " son contemporáneos. \n";
    }else {
        echo "No son contemporaneos. \n";
    }

?>