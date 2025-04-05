<?php

    //ej1
    //PROGRAMA empresa
    //Int $edad, $masEdad, $contTotal, $contP, $sumaEdad, $contTec
    //Float $promedioEdadT, $porcentajeP
    //String $nombre, $puesto, $mayor, $rta
    $contTotal = 0;
    $contP = 0;
    $sumaEdad = 0;
    $contTec = 0;
    $masEdad = -999;

    do {
        echo "Ingrese nombre del empleado:\n";
        $nombre = trim(fgets(STDIN));
        echo "Edad:\n";
        $edad = trim(fgets(STDIN));
        echo "Puesto:\n";
        $puesto = trim(fgets(STDIN));
        if ($edad > $masEdad) {
            $mayor = $nombre;
            $masEdad = $edad;
        }
        switch ($puesto) {
            case "P": $contP = $contP + 1;
                break;
            case "T": $sumaEdad = $sumaEdad + $edad;
                    $contTec = $contTec + 1;
                break;
        }
        $contTotal = $contTotal + 1;
        echo "Desea ingresar más datos? (S-N)\n";
        $rta = trim(fgets(STDIN));
    }while ($rta == "S");
    if ($contTotal > 0) {
        $promedioEdadT= ($sumaEdad / $contTec);
        $porcentajeP = (($contP / $contTotal)*100);
        echo "Persona con más edad: " . $mayor . ", con " . $masEdad . " años.\n";
        echo "Porcentaje de profesionales: " . $porcentajeP . "% del total.\n";
        echo "Promedio de edad del personal técnico: " . $promedioEdadT . " años.\n";
    }else{
        echo "No se ingresaron datos.\n";
    }
?>