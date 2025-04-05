<?php

    //PROGRAMA censo
    //Este algoritmo hace una serie de operaciones y comparaciones con los datos ingresados de encuestas realizadas
    //Int $cant, $menores, $j, $i, $masChico, $suma, $promedio
    //String $nombre, $jefeHogar
    //Float 

    $j = 0;
    $masChico = -999;
    $suma = 0;
    
    echo "¿Cuantas encuestas realizará?\n";
    $cant = trim(fgets(STDIN));
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
    /*De la variable $promedio solo necesito el primer digito ya que estamos hablando de promedio de personas, por lo tanto uso numeros enteros*/
    $promedio = (int)($suma / $cant);
    echo ">Cantidad de encuestadas formuladas: " . $cant . "\n>Cantidad de viviendas que tienen integrantes menores a 18 años: " . $j . "\n>El nombre del jefe de familia con mayor cantidad de menores en la vivienda: " . $jefeHogar . "\n>Promedio de la cantidad de personas por vivienda: " . $promedio;



?>