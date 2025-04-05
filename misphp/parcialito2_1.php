<?php

    //PROGRAMA concesionaria
    /*este programa mantiene información sobre los vehículos que realizan services oficiales en la concesionaria*/
    //Int $patente, $modelo, $masAntiguo, $patenteMasAntiguo, $contCamion, $contCamioneta, $antiguedad
    //String $rta, $tipo
    //Float $porcentajeC, $promedio

        $anioActual = 2024;
        $masAntiguo = 9999;
        $total = 0;
        $contCamion = 0;
        echo "¿Desea ingresar vehículos? (S-N)\n";
        $rta = trim(fgets(STDIN));
        if ($rta == "N"){
            echo "Hoy no se ingresaron datos de vehículos.\n";
        }else{
            while ($rta=="S") {
                $total += +1;
                echo "Ingrese el nro de patente del vehículo:\n";
                $patente = trim(fgets(STDIN));
                echo "Ingrese modelo del vehículo (año en el que fue adquirido):\n";
                $modelo = trim(fgets(STDIN));
                echo "Ingrese tipo de vehículo: (A = auto, C= camioneta, D= camion)\n";
                $tipo = trim(fgets(STDIN));
                if ($modelo < $masAntiguo) {
                    $masAntiguo = $modelo;
                    $patenteMasAntiguo = $patente;
                }
                if ($tipo == "D"){
                    $contCamion+= +1;
                }
                if($tipo == "C"){
                    $contCamioneta =+ 1;
                    $antiguedad = $anioActual - $modelo;

                }
                echo "¿Quiere ingresar más datos? (S-N)\n";
                $rta = trim(fgets(STDIN));
            }
            echo "El modelo más antiguo de todos los vehículos ingresados es del año: " . $masAntiguo . " con patente " . $patenteMasAntiguo . "\n";
            if($contCamion > 0){
                $porcentajeC = ($contCamion/$total) * 100;
                echo "El porcentaje de camiones respecto del total de vehículos ingresados es: " . $porcentajeC . "%.\n";
            }else{
                echo "No se ingresaron camiones.\n";
            }

            if ($contCamioneta > 0){
                $promedio= $antiguedad/$contCamioneta;
                echo "El promedio de los modelos de camionetas es: " . $promedio . "\n";
            }else{
                echo "No se ingresaron camionetas.\n";
            }
        }
            
?>