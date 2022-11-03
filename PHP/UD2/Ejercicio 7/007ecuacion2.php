<?php
$a = $_GET["a"]; 
$b = $_GET["b"]; 
$c = $_GET["c"]; 

$discriminante = $b**2 - 2*$a*$c; 

if ($discriminante <0) {
    echo "Error, no se puede calcular";
}
else if ($discriminante == 0) {
    echo "La solucion es " . -$b/(2*$a) ;
}
else {
    echo "Tiene dos soluciones: 
    <br>
    <br>
    Primera solución:" . (-$b+ sqrt($discriminante))/(2*$a) .
    "<br>
    <br>
    Segunda solución:" . (-$b- sqrt($discriminante))/(2*$a) ;
}

?>