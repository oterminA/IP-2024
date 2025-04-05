<?php

    /**
     * este modulo convierte hs/min/segundos en segundos
     * @param int $laHora
     * @param int $elMinuto
     * @param int $elSegundo
     * @return int 
    */

    function modConversion($laHora, $elMinuto, $elSegundo) {
        /*Int $hs, $min, $seg, $calculo*/
        $hs = ($laHora * 3600);
        $min = ($elMinuto * 60);
        $calculo = ($hs + $min + $elSegundo);
        return $calculo;
    }

    /**
     * este modulo calcula la velocidad
     * @param int $laHora
     * @param int $elMinuto
     * @param int $elSegundo
     * @param float $laDistancia
     * @return int 
    */

    function modVelocidad($laHora, $elMinuto, $elSegundo, $laDistancia) {
        /*Float $tiempo, $calculo*/
        $tiempo = (modConversion($laHora, $elMinuto, $elSegundo));
        $calculo = round(($laDistancia / $tiempo));
        return $calculo;
    }

    //PROGRAMA velocidad
    //este algritmo calcula la velocidad de dos competidores utilizando dos modulos
    //Integer $horas, $minutos, $segundos, $tiempo1, $tiempo2; Float $metros, $distancia1, $distancia2

    echo "Ingrese la distancia del puesto N° 1: \n";
    $metros = trim(fgets(STDIN));
    echo "Ingrese horas/minutos/segundos de dicho puesto: \n";
    $horas = trim(fgets(STDIN));
    $minutos = trim(fgets(STDIN));
    $segundos = trim(fgets(STDIN));
    $tiempo1 = modConversion($horas, $minutos, $segundos);
    $distancia1 = modVelocidad($horas, $minutos, $segundos, $metros);

    echo "Ingrese la distancia del puesto N° 2: \n";
    $metros = trim(fgets(STDIN));
    echo "Ingrese horas/minutos/segundos de dicho puesto: \n";
    $horas = trim(fgets(STDIN));
    $minutos = trim(fgets(STDIN));
    $segundos = trim(fgets(STDIN));
    $tiempo2 = modConversion($horas, $minutos, $segundos);
    $distancia2 = modVelocidad($horas, $minutos, $segundos, $metros);

    echo "El puesto N° 1 tuvo una velocidad de: " . $distancia1 . "m/s. El puesto N° 2 tuvo una velocidad de: " . $distancia2 . "m/s \n";
?>