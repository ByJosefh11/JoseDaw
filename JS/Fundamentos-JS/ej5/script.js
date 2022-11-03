"use strict"

//ALERT
alert("Hola");

//PROMPT
//result = prompt(title, [default]);
let age = prompt ('¿Cuántos años tienes?', 100);
alert(`Tienes ${age} años!`); //Tienes 100 años!

//CONFIRM
//result = confirm(pregunta);
let isBoss = confirm("¿Eres el jefe?");
alert(isBoss); // true si se pulsa OK
