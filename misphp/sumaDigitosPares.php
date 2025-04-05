<?php 

echo "ingrese un numero entero \n";
$num = trim(fgets(STDIN));

$suma = 0;

while ($num >0 ) {
     $digito = $num % 10;
    if ($digito % 2 == 0 ) {
       $suma = $suma + $digito;
     }
     $num = (int) ($num / 10);
}

echo "la suma de los digitos pares es: " . $suma;

