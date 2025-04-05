<?php

    //PROGRAMA alumnos
    //Int $anioNac, $actual, $peso, $edad, $cont, $sumaP, $masEdad, $menosEdad
    //FLoat $altura, $promedio
    //String $seguir

    $masEdad = -999;
    $menosEdad = 999;
    $cont  = 0;
    $sumaP = 0;
    $actual = 2024;

    do {
        echo "Ingrese año de nacimiento:\n";
        $anioNac = trim(fgets(STDIN));
        echo "Ingrese altura del alumno: \n";
        $altura = trim(fgets(STDIN));
        echo "Ingrese peso del alumno: \n";
        $peso = trim(fgets(STDIN));
        $edad = $actual - $anioNac;
        if ($edad > $masEdad){
            $masEdad = $edad;
            $masAlt = $altura;
        }
        if ($edad < $menosEdad){
            $menosEdad = $edad;
            $menosPeso = $peso;
        }
        $cont = $cont +1;
        $sumaP = $sumaP + $peso;
        echo "Desea ingresar otro alumno?(SI-NO)\n";
        $seguir = trim(fgets(STDIN));
    }while ($seguir == "SI");
    $promedio = round($sumaP / $cont, 2);
    echo "Edad y altura del mayor: ". $masEdad . " y " . $masAlt . "\nPeso y edad del alumno menor: " . $menosPeso . " y " . $menosEdad . "\nPeso promedio: " . $promedio;

?>