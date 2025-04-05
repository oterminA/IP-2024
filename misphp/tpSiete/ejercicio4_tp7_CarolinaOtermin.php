<?php

    /**
    * la función retorna un arreglo multidimensional de mascotas
    * @return array[] multidimensional $misMascotas
    */
    function cargarMascotas(){
        $mascota1=["nombre" => "Gonzo",
                    "edad" => 9,
                    "tipo" => "perro"];
        $mascota2=["nombre" => "Peggy",
                    "edad" => 3,
                    "tipo" => "puerco"];
        $mascota3=["nombre" => "Harry",
                    "edad" => 4,
                    "tipo" => "hamster"];
        $misMascotas=[];
        $misMascotas[0]=$mascota1;
        $misMascotas[1]=$mascota2;
        $misMascotas[2]=$mascota3;
        return $misMascotas;
    }

    /**
     * el modulo muestra por pantalla un arreglo multidimensional de mascotas, creado en la función anterior.
     * @param array[] multidimensional $lasMascotas
    */
    function modMostrarMascotas($lasMascotas){
        foreach($lasMascotas as $indice => $elemento){
            echo "Mascota " . ($indice+1) . ": " . $elemento["nombre"] . " es " . $elemento["tipo"] . " de " . $elemento["edad"] . " años. \n";
        }
    }

    /**
     * la funcion busca a la primera mascota menor a la edad ingresada en el p.principal y la retorna; de no encontrar una, devuelve -1
     * @param int $menorE
     * @param array[] 
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
                $masChico = $lasMascotas[$i];
            }
            $i++;
        }
        return $masChico;
    }

    //PROGRAMA principal
    /*usa funciones anteriores para cargar y mostrar un arreglo multidimensional de mascotas, además de mostrar a la menor según una edad específica ingresada por el usuario*/
    //Int $edad, $buscarMenor
    
        do {
            echo "Ingrese una edad para buscar a la primera mascota menor a ella: \n";
            $edad= trim(fgets(STDIN));
        } while ($edad <= 0);
        $cargarM = cargarMascotas();
        echo "Lista de las mascotas:\n";
        $mostrarM= modMostrarMascotas($cargarM);
        $buscarMenor = buscarPrimerMenorA($edad, $cargarM);
        if ($buscarMenor == -1){
            echo "No se encontraron mascotas menores a la ingresada.\n";
        }else{
            echo "La primera mascota menor es " . $buscarMenor["nombre"] . ", de tipo " . $buscarMenor["tipo"] . ", con " . $buscarMenor["edad"] . " años.\n";
        }
?>