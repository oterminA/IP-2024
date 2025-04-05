<?php

    /**
     * @param int $num
     * @param int $otroNum
     * @return int
    */

    function modAlternativa($num, $otroNum){
        //Int $j
        $j = 0;
        if ($otroNum % $num == 0) {
            $j = $j + 1; 
        }
        return $j;
    }


    //ALGORITMO secuencia
    //documentacion
    //Int $nro, $otroNro, $i, $porcentaje, $alternativa; String $rta;

    $i = 0;

    echo "Ingrese un nro para evaluar sus multiplos:\n";
    $nro = trim(fgets(STDIN));
    echo "Desea ingresar otro num a la secuencia?(s/n)\n";
    $rta = trim(fgets(STDIN));
    if ($rta == "s") {
        while ($rta !== "n") {
            echo "Nro de la secuencia:\n";
            $otroNro = trim(fgets(STDIN));
            $alternativa = modAlternativa($nro, $otroNro);
            $i = $i +1;
            echo "Desea ingresar otro num a la secuencia?(s/n)\n";
            $rta = trim(fgets(STDIN));
        }
        echo $alternativa;
        $porcentaje = ($alternativa / $i) * 100;
        echo "Porcentaje multiplos: " . $porcentaje . "%.";
    }else {
        echo "No se ingresaron nros.";
    }

    ////////////otra opción para la resolucion://////////////////////
    //Int $num, $x, $cantNumSec, $cantOtraCosa
    //Float $porcentaje
    //String $rta
    $cantNumSec=0;
    $cantOtraCosa=0;
    echo "Ingrese un valor entero(x)";
    $x= trim(fgets(STDIN));
    echo "Desea ingresar otro numero?(si-no)";
    $rta = trim(fgets(STDIN));
    while ($rta == "si"){
        echo "ngrese un numero de la secuencia:";
        $num = trim(fgets(STDIN));
        if ($num % $x == 0){
            $cantOtraCosa = $cantOtraCosa +1;
        }
        $cantNumSec = $cantNumSec + 1;
        echo "Desea ingresar otro numero?(si-no)";
        $rta = trim(fgets(STDIN));
    }
    if ($cantNumSec !== 0){
        $porcentaje = ($cantOtraCosa*100)/$cantNumSec;
        echo "El porcentaje es: " . $porcentaje;
    }else{
        echo "No se ingresaron numeros a la secuencia.";
    }

?>