"use strict"

//OR ||
//result = a || b;
alert(true || true); // true (verdadero)
alert(false || true); // true
alert(true || false); // true
alert(false || false); // false (falso)

if (1 || 0) { // Funciona como if( true || false )
    alert("valor verdadero!");
  }

let hour = 7;
if (hour < 8 || hour > 21) {
  alert( 'Ilerna está cerrada.' );
}

let esFinDe = true;
if (hour < 8 || hour > 21 || esFinDe) {
  alert("Ilerna esta cerrada."); // Es fin de semana
}

//Encuentra el primer valor veredadero
alert(1 || 0); // 1 (1 es un valor verdadero)
alert(null || 1); // 1 (1 es el primer valor verdadero)
alert(null || 0 || 1); // 1 (el primer valor verdadero)
alert(undefined || null || 0); // 0 (todos son valores falsos, retorna el último valor)

let firstName = "";
let lastName = "";
let nickName = "SuperCoder";
alert( firstName || lastName || nickName || "Anonymous"); // SuperCoder

//Evaluación del camino más corto.
true || alert("not printed"); //No se ejecuta -- camino corto
false || alert("printed"); //Se ejecuta camino corto