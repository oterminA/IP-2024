<?php

    //PROGRAMA censo
    //Este algoritmo hace una serie de operaciones y comparaciones con los datos ingresados de encuestas realizadas, además se efectúan algunas validaciones para verificar que los datos ingresados cumplen con lo pedido
    //Int $cant, $menores, $j, $i, $masChico, $suma
    // Float $promedio
    //String $nombre, $jefeHogar

    $j = 0;
    $masChico = -99;
    $suma = 0;
    
    echo "¿Cuantas encuestas se ingresarán?\n";
    $cant = trim(fgets(STDIN));

    if ($cant == 0) {
        echo "No se ingresaron encuestas.\n";
    }else{
        for ($i = 1; $i <= $cant; $i++) {
            echo "Nombre del jefe de hogar:\n";
            $nombre = trim(fgets(STDIN));
            echo "Cantidad de habitantes que viven en la vivienda:\n";
            $habitantes= trim(fgets(STDIN));
            echo "Cantidad de niños menores a 18 años:\n";
            $menores = trim(fgets(STDIN));
            if ($menores > 0) {
                $j = $j +1;
                if ($menores > $masChico) {
                    $masChico = $menores;
                    $jefeHogar = $nombre;
                }
            }
            $suma = $suma + $habitantes;
        }

        if ($masChico == -99) {
            $jefeHogar = "no hubieron menores en las viviendas encuestadas.";
        }

        $promedio = ($suma / $cant);
        echo ">>Cantidad de encuestadas formuladas: " . $cant . "\n>>Cantidad de viviendas que tienen integrantes menores a 18 años: " . $j . "\n>>El nombre del jefe de familia con mayor cantidad de menores en la vivienda: " . $jefeHogar . "\n>>Promedio de la cantidad de personas por vivienda: " . $promedio;
    }

?>