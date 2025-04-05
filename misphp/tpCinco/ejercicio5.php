<?php

    /**
     * este modulo calcula si un nro es multiplo de otro
     * @param int $numA
     * @param int $numB
     * @param boolean
    */

    function modEsMultiplo($numA, $numB){
        /*Boolean $calculo*/
        $calculo = ($numA % $numB == 0);
        return $calculo;
    }

    //PROGRAMA numerosMultiplos
    //calcula si un no es multiplo de otro
    //Int $num1, $num2

    echo "Primer numero:\n";
    $num1 = trim(fgets(STDIN));
    echo "Segundo numero:\n";
    $num2 = trim(fgets(STDIN));
    if (modEsMultiplo($num1, $num2)) {
        echo $num1 ." es multiplo de " . $num2 ;
    }else{
        echo $num1 . " no es multiplo de " . $num2 ;
    }
?>