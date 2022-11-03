"use strict"

//AND
//result = a && b;
alert(true && true); // true
alert(false && true); // false
alert(true && false); // false
alert(false && false); // false

let hour = 12;
let minute = 30;

if (hour == 12 && minute == 30) {
  alert("La hora es 12:30");
}

if (1 && 0) { // evaluado como true && false
    alert( "no funcionará porque el resultado es un valor falso" );
  }

 //AND “&&” encuentra el primer valor falso
 //result = value1 && value2 && value3;

// si el primer operando es un valor verdadero,
// AND retorna el segundo operando:
alert(1 && 0); // 0
alert(1 && 5); // 5

// si el primer operando es un valor falso,
// AND lo retorna. El segundo operando es ignorado
alert(null && 5); // null
alert(0 && "cualquier valor"); // 0

alert(1 && 2 && null && 3); // null
alert(1 && 2 && 3); // 3, el último.
