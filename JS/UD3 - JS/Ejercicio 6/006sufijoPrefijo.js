let a = 1, b = 1;
let c = ++a; // a = a+1; let c = a; Respuesta -> a=2, c=2? 
let d = b++; // let d = b; b = b+1; Respuesta -> b=2, d=1?

alert ("a = " + a);
alert ("b = " + b);
alert ("c = " + c);
alert ("d = " + d);