<?php

    /**
     * esta funcion recibe como parámetro el lado de un triángulo equilátero y retorna su perímetro 
     * @param float $elLado;
     * @return float
     */

     function modPerimetro ($elLado) {
        /*Float $calculo*/
        $calculo = ($elLado * 3) ;
        return $calculo ;
     }

     /**
     * esta funcion recibe como parámetro el lado de un triángulo equilátero y retorna su altura 
     * @param float $elLado;
     * @return float
     */

     function modAltura ($elLado) {
      /*Float $calculo*/
      $calculo = ($elLado * sqrt(3)) / 2 ;
      return $calculo ;
   }

   /**
     * esta funcion recibe como parámetro el lado de un triángulo equilátero y retorna su area 
     * @param float $elLado;
     * @return float
     */

     function modArea ($elLado) {
      /*Float $calculo, $alt*/
      $alt = modAltura($elLado);
      $calculo = ($elLado * $alt) / 2 ;
      return $calculo ;
   }

   //PROGRAMA triangulo
   //este algortimo calcula medidas de un triangulo equlatero usando modulos
   //Float $perimetro, $altura, $area, $lado

   echo "Ingrese en CM la medida del lado del triangulo: \n";
   $lado = trim(fgets(STDIN));
   $perimetro = modPerimetro($lado);
   $altura = modAltura($lado);
   $area = modArea($lado);
   echo "Dado un triangulo equilatero de lado " . $lado . " cm, su perimetro es de " . $perimetro . " cm, y su area es de " . $area . " cm2. \n";

?>