let cani = prompt("Pon una frase y te la devuelvo en modo cani");

function cadenacani(texto) {
  for (let i = 0; i <texto.length; i++) {
    if (i % 2 == 0) {
        console.log("");
      document.write(texto.substring(i, i+1).toUpperCase());


    } else {
        document.write(texto.substring(i, i+1).toLowerCase());
    }
  }
}

cadenacani(cani);



