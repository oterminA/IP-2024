<?php

    /**
     * la funcion recibe un arreglo por parametro y retorna la suma de sus valores
     * @param float[] $valores arreglo indexado
     * @return float
    */
    function modSumaValores($valores){
        //Float $suma
        $suma = 0; 
        foreach ($valores as $elemento){
            $suma += $elemento;
        }
        return $suma;
    }

    //PROGRAMA principal
    /*el programa usa un módulo para calcular la suma del costo de los celulares, además de mostrar el costo de un celular en particular elegido por el usuario*/
    //Int $nro
    //Float $suma
    $suma = 0;

        $celulares = [];
        $celulares[0] = "Moto G6";
        $celulares[1] = "Samsung J7";
        $celulares[2] = "LG K9";
        $celulares[3] = "IPhone SE";
        $celulares[4] = "Galaxy A9";

        $valor= [];
        $valor[0] = 22030.90;
        $valor[1] = 10500.00;
        $valor[2] = 27999.00;
        $valor[3] = 38105.00;
        $valor[4] = 17000.80;

        echo "Indique el numero de celular cuyo costo quiere saber: ";
        $nro = trim(fgets(STDIN));
        if ($nro > count($celulares) && $nro > count($valor)){
            echo "ERROR. El numero ingresado no tiene correspondencia con los elementos a mostrar.\n";
        }else{
            echo "Celular " . $celulares[$nro] . "- costo $" . $valor[$nro] . "\n";
            $suma = modSumaValores($valor);
            echo "La suma del precio de todos los celulares es: $" . $suma;
        }
        




?>