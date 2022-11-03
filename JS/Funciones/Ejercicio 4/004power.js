let x = Number (prompt('Escribeme un numero', ''));
let n = Number (prompt('Escribeme su potencia', ''));
pow(x,n);

function pow(x,n) { 
    if (x > 1) {

        let resultado = x ** n;
        alert (resultado);
    }

    else {
        alert ("El numero tendrá que ser mayor que 1");
    }
   
}
