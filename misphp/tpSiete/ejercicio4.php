<?php

    /**
    * la función retorna un arreglo multidimensional
    * @return array[] multidimensional $misMascotas
    */
    function cargarMascotas(){
        $mascota1=[];
        $mascota1["nombre"] = "Gonzo";
        $mascota1["edad"] = 9;
        $mascota1["tipo"] = "perro";

        $mascota2=[];
        $mascota2["nombre"] = "Peggy";
        $mascota2["edad"] = 3;
        $mascota2["tipo"] = "puerco";

        $mascota3=[];
        $mascota3["nombre"] = "Harry";
        $mascota3["edad"] = 4;
        $mascota3["tipo"] = "hamster";

        $misMascotas=[];
        $misMascotas[0]=$mascota1;
        $misMascotas[1]=$mascota2;
        $misMascotas[2]=$mascota3;

        return $misMascotas;
    }


    /**
     * el modulo muestra un arreglo multidimensional 
     * @param array[] multidimensional $lasMascotas
    */
    function modMostrarMascotas($lasMascotas){
        foreach($lasMascotas as $indice => $elemento){
            echo "Mascota " . ($indice+1) . ": " . $elemento["nombre"] . " es " . $elemento["tipo"] . " de " . $elemento["edad"] . " años " . "\n";
        }
    }

    /**
     * la funcion busca la primera edad menor a la ingresada y la retorna, de no encontrar una, devuelve -1
     * @param int $menorE
     * @param array[] // ASÌ SE DOCUMENTAN LOS MULTIDIMENSIONALES
     * @return int
    */
    function buscarPrimerMenorA($menorE, $lasMascotas){
        //Int $masChico, $i, $n
        //Boolean $encontrado
        $i = 0;
        $masChico = -1;
        $encontrado = false;
        $n = count($lasMascotas);
        while($i< $n && !$encontrado){
            if($lasMascotas[$i]["edad"] < $menorE){
                $encontrado = true;
                $masChico = $lasMascotas[$i]["edad"];
            }
            $i++;
        }
        return $masChico;
    }

    //PROGRAMA principal
    //usa funciones y retorna datos de mascotas
    //Int $edad, $buscarMenor

    
    echo "Ingrese edad específica: \n";
    $edad= trim(fgets(STDIN));
    $cargarM = cargarMascotas();
    $mostrarM= modMostrarMascotas($cargarM);
    $buscarMenor = buscarPrimerMenorA($edad, $cargarM);
    if ($buscarMenor == -1){
        echo "No se encontraron mascotas menores a la ingresada.\n";
    }else{
        echo "La mascota menor tiene " . $buscarMenor . " años.\n";
    }

?>