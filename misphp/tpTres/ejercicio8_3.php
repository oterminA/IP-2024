<?php

    //este algoritmo hace los calculos de area, volumen, perimetro y diametro de un radio ingresado
    //Float $radio, $diam, $perim, $area, $vol, $sup, $M_PI

    $M_PI = 3.14;

    echo "Ingrese el radio: \n";
    $radio = trim(fgets(STDIN));
    $diam = 2*$radio;
    $perim = 2* $radio * $M_PI;
    $area = $M_PI * ($radio * $radio) ;
    $vol = (4/3) * $M_PI * ($radio * $radio * $radio);
    $sup = 4 * $M_PI * ($radio * $radio);
    echo "Con el radio indicado " . $radio . ", el diámetro es: " . $diam . ". El perimetro es: " . $perim . ". El area es de: " . $area . ". El volumen es de: " . $vol . ". La superficie de la esfera es: " . $sup . "\n";

?>