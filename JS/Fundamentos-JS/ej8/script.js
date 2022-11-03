"use strict"

//Comparación numérica
alert( 2 > 1 ); // true (correcto)
alert( 2 == 1 ); // false (incorrecto)
alert( 2 != 1 ); // true (correcto)

let result = 5 > 4; // asignar el resultado de la comparación
alert( result ); // true

//Comparación de cadenas
alert( 'Z' > 'A' ); // true
alert( 'Glow' > 'Glee' ); // true
alert( 'Bee' > 'Be' ); // true

// Comparación de diferentes tipos
alert( '2' > 1 ); // true, la cadena '2' se convierte en el número 2
alert( '01' == 1 ); // true, la cadena '01' se convierte en el número 1
alert( true == 1 ); // true
alert( false == 0 ); // true


let a = 0;
alert( Boolean(a) ); // false
let b = "0";
alert( Boolean(b) ); // true
alert( a == b ); // true!

//Igualdad estricta o identidad
alert( 0 == false ); // true
alert( '' == false ); // true
alert( 0 === false ); // falso, porque los tipos son diferentes

//Comparación con nulos e indefinidos
alert( null === undefined ); // false
alert( null == undefined ); // true
/* null/undefined se convierten en números: 
null se convierte en 0, 
mientras que undefined se convierte en NaN.*/

// Resultado extraño: null vs 0
alert( null > 0 ); /// (1) false
alert( null == 0 ); /// (2) false
alert( null >= 0 ); // (3) true
/*OJO: Las comparaciones < > <= >= convierten a null en un número,tratándolo como 0 */

//Un indefinido incomparable
alert( undefined > 0 ); // false (1)
alert( undefined < 0 ); // false (2)
alert( undefined == 0 ); // false (3)
//Se convierte en NaN para comparación
//Es null para igualdad
