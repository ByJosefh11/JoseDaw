<?php
function cadenacani($texto) {

    
    for ($i=0; $i < strlen($texto); $i++) { 
        
        if ($i%2 == 0) {
           
            echo strtoupper(substr($texto, $i, 1 ));

            //strtoupper sirve para poner la zona en mayuscula
            //substr recoge la letra de la posicion en la que está

        }

        else 
        echo strtolower(substr($texto, $i, 1 ));
    }

}

    cadenacani("hola soy super cani");
?>