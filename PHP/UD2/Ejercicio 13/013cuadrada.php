<table>
<?php

$maxfilas = $_GET["filas"];
$maxcolumnas = $_GET["columnas"];

for ($fila = 1; $fila <= $maxfilas; $fila++) {

    echo "<tr>";

    for ($columnas = 1; $columnas <= $maxcolumnas; $columnas++) {

        if ($fila == 1 | $columnas == 1 | $fila == $maxfilas | $columnas == $maxcolumnas ) {
            echo "<td> (" . $fila . " , " . $columnas . ") </td>";
        }
        else {
            echo "<td> </td>";
        }

    }
}
        echo "</tr>";
?>
</table>