"use strict"

let year = prompt('¿En que año fué publicada la especificación ECMAScript-2015?', '');

if (year == 2015) {
    alert( "¡Es Correcto!" );
    alert( "¡Eres muy inteligente!" );
  }

/** 
if (0) { // 0 es falso
  ... //NUNCA SE EJECUTA
}

if (1) { // 1 es verdadero
  ... //SIEMPRE SE EJECUTA
}
*/

let year2 = prompt('¿En qué año fue publicada la especificación ECMAScript-2015?', '');

if (year2 == 2015) {
  alert( '¡Lo adivinaste, correcto!' );
} else {
  alert( '¿Cómo puedes estar tan equivocado?' ); // cualquier valor excepto 2015
}

let year3 = prompt('¿En qué año fue publicada la especificación ECMAScript-2015?', '');

if (year3 < 2015) {
  alert( 'Muy poco...' );
} else if (year3 > 2015) {
  alert( 'Muy Tarde' );
} else {
  alert( '¡Exactamente!' );
}

//OPERADOR TERNARIO
let accessAllowed = (age > 18) ? true : false;
// el operador de comparación  "age > 18" se ejecuta primero de cualquier forma
// (no necesitamos agregar los paréntesis)
accessAllowed = age > 18 ? true : false;

let age = prompt('¿edad?', 18);
let message = (age < 3) ? '¡Hola, bebé!' :
  (age < 18) ? '¡Hola!' :
  (age < 100) ? '¡Felicidades!' :
  '¡Qué edad tan inusual!';
alert( message );

//NO es una buena práctica
let company = prompt('¿Qué compañía creó JavaScript?', '');
(company == 'Netscape') ?
   alert('¡Correcto!') : alert('Equivocado.');