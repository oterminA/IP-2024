<?php
    /**
     * el modulo lee y almacena temperaturas ingresadas por el usuario
     * @param int $temp
     * @return float[] indexado
    */
    function modLeerTemperaturas($temp) {
        $arrayTemperaturas = [];
        for ($i=0; $i < $temp; $i++){
            echo "Temperatura " . ($i+1) . ": ";
            $arrayTemperaturas[$i]= trim(fgets(STDIN));
        }
        return $arrayTemperaturas;
    }

    /**
     * este modulo muestra por pantalla las temperaturas almacenadas en un arreglo indexado
     * @param float[] $lasTemperaturas array indexado
    */
    function modListarTemperaturas($lasTemperaturas){
        //Float $temperatura
        foreach ($lasTemperaturas as $i => $temperatura) {
            echo "Temperatura " . ($i+1) . ": " . $temperatura . "\n";
        }
    }

    /**
     * la funcion calcula el promedio de todas las temperaturas de un array
     * @param float[] $lasTemperaturas arreglo indexado
     * @return int
    */
    function modPromTemperaturas($lasTemperaturas){
        //Int $n, $sumaT
        $sumaT = 0;
        $n = count($lasTemperaturas);
        for ($i=0; $i < $n; $i++){
            $sumaT += $lasTemperaturas[$i];
        }
        return round(($sumaT/$n),2);
    }

    /**
     * esta funcion retorna el porcentaje de temperaturas mayores a una temperatura especifica ingresada por el usuario
     * @param float $tempEspecifica
     * @param float[] $lasTemperaturas arreglo indexado de temperaturas
     * @return float
    */
    function modPorcTemperaturas($tempEspecifica, $lasTemperaturas){
        //Int $n, $cont, $porcentaje
        $cont = 0;
        $porcentaje= 0;
        $n = count($lasTemperaturas); 
        for ($i = 0; $i < $n; $i++){
            if($lasTemperaturas[$i] > $tempEspecifica){
                $cont += 1;
            }
        }
        if ($n > 0) {
            $porcentaje = round(($cont / $n) * 100,2);
        }
        return $porcentaje;
    }

    /**
     * el modulo retorna la menor temperatura de todas las que están almacenadas
     * @param float[] $lasTemperaturas arreglo indexado
     * @return int
    */
    function modMinTemperatura($lasTemperaturas){
        //Int $n, $min, $indiceMin
        $n= count($lasTemperaturas);
        $indiceMin = 0;
        $min = 9999;
        for ($i=0; $i < $n; $i++){
            if ($lasTemperaturas[$i] < $min){
                $min = $lasTemperaturas[$i];
                $indiceMin = $i;
            }
        }
        return $indiceMin;
    }

    /**
      * el modulo retorna la mayor temperatura de todas las que están almacenadas en el arreglo
     * @param float[] $lasTemperaturas arreglo indexado
     * @return int
    */
    function modMaxTemperatura($lasTemperaturas){
        //Int $n, $max, $indiceMax
        $n= count($lasTemperaturas);
        $indiceMax = 0;
        $max = -999;
        for ($i=0; $i < $n; $i++){
            if ($lasTemperaturas[$i] > $max){
                $max = $lasTemperaturas[$i];
                $indiceMax = $i;
            }
        }
        return $indiceMax;
    }

    /**
     * la función crea un arreglo asociativo con una temperatura minima y otra maxima, usando dos módulos previos
     * @param float[] $lasTemperaturas indexado
     * @return array float arreglo asociativo
    */
    function modExtremosTemperaturas($lasTemperaturas){
        //Int $min, $max
       $min = modMinTemperatura($lasTemperaturas); //RETORNA EL INDICE DE LA TEMPERATURA MINIMA
       $max = modMaxTemperatura($lasTemperaturas); //RETORNA EL INDICE DE LA TEMPERATURA MAXIMA

        $arregloExtremos = [];
        $arregloExtremos["min"]= $lasTemperaturas[$min]; //ACÁ EN "MIN" SE GUARDA LA TEMPERATURA QUE SE HAYA ENCONTRADO COMO MINIMA
        $arregloExtremos["max"]= $lasTemperaturas[$max]; //EN "MAX" SE GUARDA LA TEMPERATURA QUE SE HAYA ENCONTRADO COMO MAXIMA 
        return $arregloExtremos;
    }

    //PROGRAMA principal
    /*este programa principal es un menu para trabajar con arreglos de temperaturas donde se usan funciones para realizar distintas operaciones*/
    //Int $cant, $op, 
    //Float $temperaturas
    //String $rta

    echo "Desea ingresar al menu de temperaturas? (SI-NO)\n";
    $rta = trim(fgets(STDIN));
    if ($rta == "NO" || $rta == "no"){
        echo "No se ingresó al menú.\n";
    }else{
        echo "Ingrese cantidad de temperaturas:\n";
            $cant = trim(fgets(STDIN));
            $temperaturas = modLeerTemperaturas($cant);
        do{
            echo "Seleccione una opción:\n";
            echo "1-Mostrar las temperaturas por pantalla.\n";
            echo "2-Promedio de temperaturas.\n";
            echo "3-Porcentaje de temperaturas.\n";
            echo "4-Visualizar temperatura minima.\n";
            echo "5-Visualizar temperatura maxima.\n";
            echo "6-Extremos minimos y maximos de temperaturas.\n";
            echo "7-Salir.\n";
            $op = trim(fgets(STDIN));
            switch ($op) {
                case 1:
                    $mostrarT= modListarTemperaturas($temperaturas);
                    break;
                case 2:
                    $prom= modPromTemperaturas($temperaturas);
                    echo "Promedio: " . $prom . "\n";
                    break;
                case 3:
                    echo "Ingrese temperatura especifica:\n";
                    $especifica = trim(fgets(STDIN));
                    $porc= modPorcTemperaturas($especifica, $temperaturas);
                    if ($porc == 0){
                        echo "No se ingresaron temperaturas mayores a la específica.\n";
                    }else{
                         echo "El porcentaje de temperaturas mayores a la ingresada es: " . $porc . "% \n";
                    }
                    break;
                case 4:
                    $indiceMin = modMinTemperatura($temperaturas);    
                    echo "La menor temperatura es: " . $temperaturas[$indiceMin] . "\n";                
                    break;
                case 5:
                    $indiceMax = modMaxTemperatura($temperaturas);    
                    echo "La mayor temperatura es: " . $temperaturas[$indiceMax] . "\n";                
                    break;
                case 6:
                    $extremos = modExtremosTemperaturas($temperaturas);//NO SE PUEDE MOSTRAR UN ECHO $arreglo, se hace como está abajo:////
                    echo "Minima:" . " " . $extremos["min"] . "\n";
                    echo "Maxima:" . " " . $extremos["max"] . "\n";
                    break;
            }
        }while ($op < 7);
        echo "Ha salido del menú.\n";
    }
?>