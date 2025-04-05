<?php

    /**
     * @param int $numero
     * @return boolean
    */
        function esPrimo($numero){
            //Int $num
            //Boolean $resultado
            $num = 0;
            $num = $num - 1;
            $resultado = true;
            while (($num != 1 && $num != 0) && (($numero % $num) !=0)){
                $num = $num -1;
            }
            if ($num != 1){
                $resultado = false;
            }
            return $resultado;
        }

    //PRINCIPAL
    //Int $numeroIngresado
        echo "Ingrese un número entero:\n";
        $numeroIngresado = trim(fgetc(STDIN));
        if ($numeroIngresado>1){
            if (esPrimo($numeroIngresado)){
                echo "El numero ES primo.\n";
            }else{
                echo "El numero NO ES primo.\n";
            }
        }

?>