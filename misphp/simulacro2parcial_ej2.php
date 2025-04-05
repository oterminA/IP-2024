<?php

    /**
     * el módulo calcula la cant de horas
     * @param int $lasHoras
     * @param string $elTipo
     * @return int
    */

    function modConsumo($lasHoras, $elTipo) {
        //Int $consumo
        switch ($elTipo) {
            case "TV":
                $consumo = $lasHoras * 70;
                break;
            case "PLANCHA":
                $consumo = $lasHoras * 1000;
                break;
            case "LAVADORA":
                $consumo = $lasHoras * 2000;
                break;
        }
        return $consumo;
    }

    //PROGRAMA electrodomesticos
    //...
    //Int $cant, $consumo, $sumaTv, $sumaPlancha, $sumaL
    //String $tipo
    //Float $horas
    $sumaTv = 0;
    $sumaPlancha = 0;
    $sumaL = 0;

    echo "Ingrese cantidad de electromesticos: \n";
    $cant = trim(fgets(STDIN));
    if ($cant <= 0){
        echo "No se ingresaron datos. \n";
    }else{
        for ($i = 1; $i <= $cant; $i++){
            echo "Tipo de electrodomestico: TV-PLANCHA-LAVADORA \n";
            $tipo = trim(fgets(STDIN));
            echo "Horas de uso: \n";
            $horas = trim(fgets(STDIN));
            $consumo = modConsumo($horas, $tipo);
            if ($tipo == "TV"){
                $sumaTv = $sumaTv + $consumo;
            }elseif ($tipo == "PLANCHA"){
                $sumaPlancha = $sumaPlancha + $consumo;
            }else
                $sumaL = $sumaL + $consumo;
        }
        echo "Total TV: " . $sumaTv . " watts.\n";
        echo "Total PLANCHA: " . $sumaPlancha . " watts.\n";
        echo "Total LAVADORA: " . $sumaL . " watts.\n";
    }
?>