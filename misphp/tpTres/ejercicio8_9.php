








<?php

    //este algoritmo calcula el area de un rectangulo
    //Float $largo, $ancho, $area

    echo "Ingrese el largo y ancho del rectángulo: \n";
    $largo = trim(fgets(STDIN)) ;
    $ancho = trim(fgets(STDIN)) ;
    $area = ($largo * $ancho) ;
    echo "El area de ese rectangulo es: " . $area ;

?>