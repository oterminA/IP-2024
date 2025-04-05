<?php

    //1. PRINCIPAL veterinaria
    //este algoritmo recibe datos o no, sobre animales que ingresan a una veterinaria
    //String $seguir, $tipo, $duenio, $menorDuenio
    //Int $cantidad, $edad, $menor, $contG, $contC, $contM, $porcentaje
    // $cantidad = 0;
    // $menor = 999;
    // $contC = 0;
    // $contG = 0;
    // $contM = 0;
    // echo "Desea ingresar datos? (si-no)\n";
    // $seguir = trim(fgets(STDIN));
    // if ($seguir == "SI"){
    //     while ($seguir !== "NO"){
    //         $cantidad = $cantidad + 1;
    //         echo "Nombre del dueño del animal: \n";
    //         $duenio = trim(fgets(STDIN));
    //         echo "Edad del animal: \n";
    //         $edad = trim(fgets(STDIN));
    //         echo "Tipo animal: \n";
    //         $tipo = trim(fgets(STDIN));
    //         if ($edad < $menor){
    //             $menor = $edad;
    //             $menorDuenio = $duenio;
    //         }
    //         if ($tipo == "G") {
    //             $contG = $contG + 1;
    //         }elseif ($tipo == "C") {
    //             $contC = $contC + 1;
    //         }else{
    //             $contM = $contM + 1;
    //         }
    //         echo "Desea ingresar más datos? (si-no)\n";
    //         $seguir = trim(fgets(STDIN));
    //     }
    //     $porcentajeG = floor(($contG / $cantidad)*100);
    //     echo "El porcentaje de animales de granja es: " . $porcentajeG . "%\n";
    //     echo "El dueño del animal más chico es: " . $menorDuenio . "\n";
    //     if ($contG > $contC && $contG > $contM){
    //         echo "El tipo de animal que recibe más atención en la veterinaria son los de granja. \n";
    //     }elseif ($contC > $contG && $contC > $contM){
    //         echo "El tipo de animal que recibe más atención en la veterinaria son los de competición. \n";
    //     }else{
    //         echo "El tipo de animal que recibe más atención en la veterinaria son las mascotas. \n";
    //     }
    // }else {
    //     echo "Hoy no se ingresaron datos.\n";
    // }

    //2. OTRO EJERCICIO SOBRE LA VETERINARIA///////////////
    //String $seguir, $tipo
    //Int $total, $edad, $menorG, $menor, $mayor, $sumaE
    //Float $prom
    // $total = 0;
    // $menorG = 999;
    // $menor = 999;
    // $mayor = -999;
    // $sumaE = 0;

    // echo "Desea ingresar datos?(S-N)\n";
    // $seguir = trim(fgets(STDIN));
    // while ($seguir == "S"){
    //     $total = $total + 1;
    //     echo "Ingrese edad del animal: \n";   
    //     $edad = trim(fgets(STDIN));
    //     echo "Ingrese tipo de animal (M:mascota- G: granja- C: competición):\n";
    //     $tipo = trim(fgets(STDIN));
    //     if ($edad < $menor) {
    //         $menor = $edad;
    //     }
    //     if ($edad > $mayor) {
    //         $mayor = trim(fgets(STDIN));
    //     }
    //     if ($tipo == "G"){
    //         if ($edad < $menorG){
    //             $menorG = $edad;
    //         }
    //     }
    //     $sumaE = $sumaE + $edad;
    //     echo "Desea ingresar más datos? (S-N)\n" ;
    //     $seguir = trim(fgets(STDIN));
    // }
    // if ($total > 0) {
    //     $prom = floor($sumaE / $total);
    //     if ($menorG == 999) {
    //         $menorG = "no hay datos de este animal.";
    //     }
    //     echo "La edad promedio es: " . $prom ."\nLa edad del animal menor es: " . $menor ."\nLa edad del animal de granja más pequeño es: " . $menorG ;
    // }else {
    //     echo "Hoy no se ingresaron pacientes.\n";
    // }
    

    //3
    /**
     * el modulo retorna la cantidad de cifras del entero ingresado
     * @param int $elNumero
     * @return $int
    */
    function modCantCifras($elNumero){
        //Int $dig, $cont
        $cont = 0;
        while ($elNumero > 0){
            $dig = $elNumero % 10;
            $elNumero = (int) ($elNumero/10);
            $cont = $cont +1;
        }
        return $cont;
    }

    /**
     * el modulo retorna la cantidad de cifras impares del entero ingresado
     * @param int $elNumero
     * @return int
    */
    function modCifrasIm($elNumero){
        //Int $dig, $contIm
        $contIm = 0;
        while ($elNumero > 0){
            $dig = $elNumero % 10;
            if ($dig % 2 !== 0){
                $contIm = $contIm + 1;
            }
            $elNumero = (int) ($elNumero / 10);
        }
        return $contIm;
    }

    /**
     * retorna verdadero o falso si el entero ingresado tiene un digito igual a 7
     * @param int $elNum
     * @return boolean
    */
    function modDigitoIgual($elNum){
        //Boolean $igual
        //Int $dig, 

        // not true = false
        // not false = true


        $seguir = true; 
        while ($elNum > 0 && $seguir){
            $dig = $elNum % 10;
            if ($dig == 7){
                $seguir = false;
            }
            $elNum = (int) ($elNum / 10);
        }
        return !$seguir;
    }

    //PROGRAMA menuOpciones
    //$Int $nro, $cant, $cantIm, $op
    //Boolean $encontrado
    $cont = 0;
    $cantIm = 0;
    do {
        echo "Opciones:\n1= Cantidad de cifras.\n2= Cantidad de digitos impares.\n3= Saber si hay un igual a 7.\n4= Salir.\n";
        $op = trim(fgets(STDIN));
        switch ($op) {
            case 1:
                echo "Numero: \n";
                $nro = trim(fgets(STDIN));
                $cont = modCantCifras($nro);
                echo "Su nro tiene: " . $cont . " cifras.\n";
                break;
            case 2:
                echo "Numero: \n";
                $nro = trim(fgets(STDIN));
                $cantIm = modCifrasIm($nro);
                echo "Su nro tiene: " . $cantIm . " cifras impares.\n";
                break;
            case 3:
                echo "Numero: \n";
                $nro = trim(fgets(STDIN));
                $encontrado = modDigitoIgual($nro);                    
                if ($encontrado) {
                    echo "Su nro tiene un digito igual a 7.\n";
                }else{
                    echo "Su nro NO tiene un digito igual a 7.\n";
                }
                break;
            case 4:
                    echo "Ha salido del menú de opciones.\n";
            // default:
            //     echo "Error, ingrese una opcion valida.\n";
            //     break;
        }
    }while($op <=3 && $op >=1);

?>