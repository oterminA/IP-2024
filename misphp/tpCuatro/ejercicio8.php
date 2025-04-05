<?php

    /**
     * este modulo calcula la longitud de la circunferencia de la base de un cilindro
     * @param float $elRadio
     * @return float
    */

    function modLongCirc($elRadio) {
        /*Float $M_PI, $calculo*/
        $M_PI = 3.14;
        $calculo = (2*$M_PI*$elRadio);
        return $calculo;
    }

    /**
     * este modulo calcula la superficie de la base de un cilindro
     * @param float $elRadio
     * @return float
    */

    function modSupBase($elRadio) {
        /*Float $M_PI, $calculo*/
        $M_PI = 3.14;
        $calculo = ($M_PI* pow($elRadio, 2));
        return $calculo;
    }

    /**
     * este modulo calcula la superficie lateral del cilindro
     * @param float $elRadio
     * @param float $laAltura
     * @return float
    */

    function modSupLateral($elRadio, $laAltura) {
        /*Float $M_PI, $calculo*/
        $M_PI = 3.14;
        $calculo = (modLongCirc($elRadio)*$laAltura);
        return $calculo;
    }

    /**
     * este modulo calcula la superficie total del cilindro
     * @param float $elRadio
     * @param float $laAltura
     * @return $float
    */

    function modSupTotal($elRadio, $laAltura) {
        /*Float $calculo*/
        $calculo = ((2*modSupBase($elRadio)) + modSupLateral($elRadio, $laAltura));
        return $calculo;
    }

    /**
     * este modulo calcula el volumen del cilindro
     * @param float $elRadio
     * @param float $laAltura
     * @return float
    */

    function modVolumen($elRadio, $laAltura) {
        /*Float $calculo*/
        $calculo = (modSupBase($elRadio) * $laAltura);
        return $calculo;
    }

    //PROGRAMA cilindro
    //este programa utiliza modulos para calcular distintas medidas de un cilindro
    //Float $altura, $radio, $longitud, $base, $lateral, $total, $volumen

    echo "Ingrese en cm las medidas de altura y radio del cilindro: \n";
    $altura = trim(fgets(STDIN));
    $radio = trim(fgets(STDIN));
    $longitud = modLongCirc($radio);
    $base = modSupBase($radio);
    $lateral = modSupLateral($radio, $altura);
    $total = modSupTotal($radio, $altura);
    $volumen = modVolumen($radio, $altura);
    echo ">Cilindro con " . $altura . " cm de altura y " . $radio . " cm de radio: \n Longitud de la circunferencia de la base: " . $longitud . " cm. \n Superficie base: " . $base . " cm2. \n Superficie lateral del cilindro: " . $lateral . " cm2. \n Superficie total: " . $total . " cm2. \n Volumen del cilindro: " . $volumen . " cm3. \n"; 
    //me olvidé de usar la funcion round 2 pero igual los resultados fueron los mismos que en el tp

?>