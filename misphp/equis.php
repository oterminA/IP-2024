<?php

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

    //ppal
    //Int $numero, $cantidad

    do {
        echo "Nro entero: \n";
        $numero = trim(fgets(STDIN));
    }while($numero <= 0);
    $cantidad = modCifrasIm($numero);
    echo "Su nro tiene: " . $cantidad . " cifras impares.\n";


?>