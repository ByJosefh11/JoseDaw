<?php
/*
UCWORDS

Convierte a mayúsculas el primer caracter de cada palabra de una cadena.
Devuelve una cadena con la primera letra de cada palabra de str convertida a
mayúsculas, si el caracter es alfanumérico. 
*/

$frase = "Investiga las siguientes funciones. ";
    echo ucwords($frase) . "<br>";
/*
STRREV

Devuelve la cadena invertida. 
*/

    echo strrev($frase). "<br>";


/*
STR_REPEAT
Devuelve el string repetido 
*/

    echo str_repeat ($frase, 2). "<br>";

/* 
MD5

Calcula el 'hash' md5 de un string 
*/

    echo md5($frase);

?>