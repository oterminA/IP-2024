<?php

    /**
     * la funcion arma un arreglo asociativo y carga datos de un circo en él
     * @return array asociativo  
    */

    function leerDatosCirco(){
        $datosCirco = [];
        echo "Nombre: ";
        $datosCirco["nombre"]=trim(fgets(STDIN));
        echo "Fecha inicio (dd/mm/aaaa): ";
        $datosCirco["fechaInicio"]=trim(fgets(STDIN));
        echo "Valor entrada: ";
        $datosCirco["valorEntrada"]=trim(fgets(STDIN));
        echo "Cantidad payasos: ";
        $datosCirco["cantPayasos"]=trim(fgets(STDIN));
        return $datosCirco;
    }

    //PROGRAMA circo
    //el programa invoca una funcion para mostrar los datos del circo
    //

        $circo = leerDatosCirco();
        print_r($circo);

?>