<?php

/*(*el algoritmo recolecta edades y devuelve la menor de estas*)
		ENTERO cant, edad, menorEdad. i
		menorEdad  999		

		ESCRIBIR(“Ingrese la cantidad de alumnos: ”)
		LEER(cant)
		SI (cant = 0) ENTONCES
			ESCRIBIR(“No se ingresaron alumnos”)
		SINO
			PARA  i   1  HASTA  i < cant   PASO   1  HACER
			ESCRIBIR(“Ingrese edad alumno: ”)
			LEER(edad)
			SI (edad < menorEdad)
				menorEdad   edad
			FIN SI
		FIN PARA
		ESCRIBIR(“El alumno más chico tiene: ” + menorEdad + “ años”)
		FIN SI

*/

//PROGRAMA edades
//el algoritmo recolecta edades y devuelve la menor de estas
//Int $cant, $edad, $menorEdad, $i

$menorEdad = 999;

echo "Ingrese la cantidad de alumnos: \n";
$cant = trim(fgets(STDIN));
if ($cant == 0) {
    echo "No se ingresaron alumnos.\n";
}else{
    for ($i = 1; $i<= $cant; $i++) {
        echo "Ingrese edad: \n";
        $edad = trim(fgets(STDIN));
        if ($edad < $menorEdad) {
            $menorEdad = $edad;
        }
    }
    echo "El alumno más chico tiene: " . $menorEdad . " años\n";
}

?>