"use strict"
//OPERADORES ARITMÉTICOS O MATEMÁTICOS

let x = 1;
x = -x;
alert( x ); // -1, se aplicó negación unaria

let y = 3;
alert( y - x ); // 2, binario negativo resta valores

alert( 5 % 2 ); // 1 es un resto de 5 dividido por 2
alert( 8 % 3 ); // 2 es un resto de 8 dividido por 3

alert( 2 ** 2 ); // 2² = 4
alert( 2 ** 3 ); // 2³ = 8
alert( 2 ** 4 ); // 2⁴ = 16

alert( 4 ** (1/2) ); // 2 (potencia de 1/2 es lo mismo que raíz cuadrada, eso es matemáticas)
alert( 8 ** (1/3) ); // 2 (potencia de 1/3 es lo mismo que raíz cúbica)

let s = "my" + "string";
alert(s); // mystring
alert(2 + 2 + '1' ); // "41" y no "221"
alert('1' + 2 + 2); // "122", no es "14"
alert( 2 - '1' ); // 1
alert( '6' / '2' ); // 3

// Sin efecto en números
x = 1;
alert( +x ); // 1
y = -2;
alert( +y ); // -2
// Convierte los no números
alert( +true ); // 1
alert( +"" );   // 0

let apples = "2";
let oranges = "3";
alert( apples + oranges ); // "23", el binario suma concatena las cadenas
// ambos valores convertidos a números antes del operador binario suma
alert( +apples + +oranges ); // 5
// la variante más larga
alert( Number(apples) + Number(oranges) ); // 5


//Asignación = devuelve un valor
let a = 1;
let b = 2;
let c = 3 - (a = b + 1);
alert( a ); // 3
alert( c ); // 0

a = b = c = 2 + 2;
alert( a ); // 4
alert( b ); // 4
alert( c ); // 4

//Modificar en el lugar
let n = 2;
n = n + 5;
n = n * 2;

n = 2;
n += 5; // ahora n = 7  (es lo mismo que n = n + 5)
n *= 2; // ahora n = 14 (es lo mismo que n = n * 2)
alert( n ); // 14

n = 2;
n *= 3 + 5; // el lado derecho es evaluado primero, es lo mismo que n *= 8
alert( n ); // 16

//Incremento y Decremento
let counter = 2;
counter++;      // funciona igual que counter = counter + 1, pero es más corto
alert( counter ); // 3

counter = 2;
counter--;      // funciona igual que counter = counter - 1, pero es más corto
alert( counter ); // 1

counter = 1;
let ca = ++counter; // (*)
alert(ca); // 2

counter = 1;
ca = counter++; // (*) cambiado ++counter a counter++
alert(ca); // 1

counter = 0;
counter++;
++counter;
alert( counter ); // 2, las líneas de arriba realizan lo mismo

//Entre otros operadores
counter = 1;
alert( 2 * ++counter ); // 4

counter = 1;
alert( 2 * counter++ ); // 2, porque counter++ devuelve el valor "antiguo"

counter = 1;
alert( 2 * counter );
counter++;

//Operador ,

let coma = (1 + 2, 3 + 4);
alert( coma ); // 7 (el resultado de 3 + 4)

// tres operaciones en una línea
/*for (a = 1, b = 3, c = a * b; a < 10; a++) {
 ...
}*/