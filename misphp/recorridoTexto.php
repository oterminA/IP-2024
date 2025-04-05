<?php
echo "ingrese una cadena de caracteres";
$texto = trim(fgets(STDIN));

$length = strlen($texto);

for ($i=0; $i < $length; $i++){
    echo $texto[$i] . "\n";
}