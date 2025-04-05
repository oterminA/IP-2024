<?php

    /**
     * esta funcion dibuja la linea de banda de una cancha de tenis
     */

    function modLineaBanda () {
        echo "+---------------+---------------+" . "\n";
    }
    
    
    /**
     * esta funcion dibuja el campo de una cancha de tenis
    */

    function modCampo() {
        echo "|               |               |" . "\n";
    }

    /**
     * esta funcion dibuja los caños de una cancha de tenis
    */
    function modCanios() {
        echo "+----+          |          +----+" . "\n";
    }

    /**
     * esta funcion dibuja la linea media de una cancha de tenis
    */
    function modLineaMedia(){
        echo "|    |          |          |    |" . "\n";
    }

    //PROGRAMA PRINCIPAL
    //este programa utiliza modulos para dibujar una cancha de tenis
    echo modLineaBanda();
    echo modCampo();
    echo modCampo();
    echo modCanios();
    echo modLineaMedia();
    echo modLineaMedia();
    echo modLineaMedia();
    echo modLineaMedia();
    echo modCanios();
    echo modCampo();
    echo modCampo();
    echo modLineaBanda();

?>

