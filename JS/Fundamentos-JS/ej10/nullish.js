"use strict"

let user;
alert(user ?? "Anonymous"); // Anonymous (user no definido)

let user2 = "John";
alert(user2 ?? "Anonymous"); // John (user definido)

let firstName = null;
let lastName = null;
let nickName = "Supercoder";

// Muestra el primer valor definido:
alert(firstName ?? lastName ?? nickName ?? "Anonymous"); // Supercoder


//Comparación con ||
let firstName2 = null;
let lastName2 = null;
let nickName2 = "Supercoder";

// muestra el primer valor "verdadero":
alert(firstName2 || lastName2
     || nickName2 || "Anonymous"); // Supercoder

let height = 0; // altura cero
alert(height || 100); // 100
alert(height ?? 100); // 0

/* 
height || 100 verifica si height es “falso”, y 0 lo es.
 - así el resultado de || es el segundo argumento, 100.
  height ?? 100 verifica si height es null/undefined, y no lo es.
- así el resultado es height como está, que es 0.
En la práctica, una altura cero es a menudo un valor válido 
que no debería ser reemplazado por un valor por defecto. 
En este caso ?? hace lo correcto.
*/

//let x = 1 && 2 ?? 3; // Syntax error

let x = (1 && 2) ?? 3; // Funciona
alert(x); // 2

// Asignar height=100, si height es null o undefined
height = height ?? 100;