"use strict"

//NOT
//result = !value;
alert(!true); // false
alert(!0); // true

//Un doble NOT !! es a veces usado para convertir un valor al tipo booleano:
alert(!!"cadena de texto no vacía"); // true
alert(!!null); // false

alert(Boolean("cadena de texto no vacía")); // true
alert(Boolean(null)); // false