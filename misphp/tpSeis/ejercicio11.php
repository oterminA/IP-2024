<?php

    //ALGORITMO comparacion
    //documentacion
    //Int $nro, $otroNro
    
    echo "Ingrese nro a encontrar:\n";
    $nro = trim(fgets(STDIN));
    do {
        echo "Ingrese nro a la secuencia:\n";
        $otroNro = trim(fgets(STDIN));
    } while ($otroNro !== "-1" && $nro !== $otroNro);

    if ($nro == $otroNro) {
        echo $nro . " fue encontrado!";
    }else{
        echo $nro . " no fue encontrado!";
    }



    /////////////////otra forma para hacer el ejercicio////////////////////
    //Int $x, $num
    //Boolean $encontrado
    $encontrado = false;
    echo "Ingrese el primer nro de la secuencia (-1 para cortar):";
    $num = trim(fgets(STDIN));
    do {
        //esto fuerza a que la persona SI o SI tenga que ingresar un numero como el que pido, una vez que lo ingresa, se continua con el algoritmo
        echo "Ingrese un nro entero X>0:";
        $x = trim(fgets(STDIN));
    }while($x<=0);
    while ($num !== -1 && !$encontrado){
        if ($num == $x){
            $encontrado = true;
        }
        echo "Ingrese otro num de la secuencia (-1 para cortar):";
        $num = trim(fgets(STDIN));
    }
    if ($encontrado){
        echo "Numero encontrado.";
    }else{
        echo "Numero no encontrado.";
    }

?>