"use strict"

//TIPOS

// no hay error
let message = "hola";
document.write(message);
message = 123456;
document.write(message);

//Number
let n = 123;
n = 12.345;

lert( 1 / 0 ); // Infinity
alert( Infinity ); // Infinity
alert( "no es un número" / 2 ); // NaN, tal división es errónea

alert( NaN + 1 ); // NaN
alert( 3 * NaN ); // NaN
alert( "not a number" / 2 - 1 ); // NaN


//BigInt
console.log(9007199254740991 + 1); // 9007199254740992
console.log(9007199254740991 + 2); // 9007199254740992

// la "n" al final significa que es un BigInt
const bigInt = 1234567890123456789012345678901234567890n;

//String
let str = "Hola";
let str2 = 'Las comillas simples también están bien';
let phrase = `se puede incrustar otro ${str}`;

let name = "John";
// incrustar una variable
alert( `Hola, ${name}!` ); // Hola, John!
// incrustar una expresión
alert( `el resultado es ${1 + 2}` ); //el resultado es 3

alert( "el resultado es ${1 + 2}" ); // el resultado es ${1 + 2} 
//(las comillas dobles no hacen nada)

//Boolean
let nameFieldChecked = true; // sí, el campo name está marcado
let ageFieldChecked = false; // no, el campo age no está marcado

let isGreater = 4 > 1;
alert( isGreater ); // verdadero (el resultado de la comparación es "sí")

//Null
//let age = null;

//Undefined
let age;
alert(age); // muestra "undefined"
age = 100;
// cambiando el valor a undefined
age = undefined;
alert(age); // "undefined"


typeof undefined // "undefined"
typeof 0 // "number"
typeof 10n // "bigint"
typeof true // "boolean"
typeof "foo" // "string"
typeof Symbol("id") // "symbol"
typeof Math // "object"  (1)
typeof null // "object"  (2)
typeof alert // "function"  (3)