let name = "Peter Parker";

alert( `Hola ${1}` ); // no es la correcta ya que me mostrará "1"
alert( `Hola ${"name"}` ); // no es la correcta ya que me mostrará "name"


alert( `Hola ${name}` ); // la correcta seria la ultima ya que la salida del scrip mostrará "Peter Parker"
