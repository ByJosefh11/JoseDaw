<?php
$edad = $_GET["edad"]; 
if ($edad < 3) {
    echo "Es un bebé.";
}
else if ($edad <=12) {
    echo "Es un niño.";
}
else if ($edad <=17) {
    echo "Es un adolescente.";
}
else if ($edad <=66) {
    echo "Es un adulto.";
}
else {
    echo "Es un jubilado.";
}
?>