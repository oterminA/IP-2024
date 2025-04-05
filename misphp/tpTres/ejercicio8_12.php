<?php

    //el algoritmo hace la conversion de C° a F°
    //Float $gradosC, $conversion

    echo "Ingrese los grados a convertir: \n";
    $gradosC = trim(fgets(STDIN));
    $conversion = (9/5) * $gradosC + 32;
    echo "La conversion de " . $gradosC . " grados C° a F° es: " . $conversion;

?>