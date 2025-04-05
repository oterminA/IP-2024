<?php 

echo "ingrese un numero entero \n";
$num = trim(fgets(STDIN));

$suma = 0;
$parar = true;

while ($num >0 && $parar ) {
     $digito = $num % 10;
    if ($digito % 2 == 0 ) {
        $primerPar = $digito;
        $parar = false;
        }
     $num = (int) ($num / 10);
}

// revisar la salida, que sucede si ingresa un 0? 
if (!$parar) 
     echo "el primer digito par es : " . $primerPar;

     