<table>
<?php

$maxfilas = $_GET["filas"];
$maxcolumnas = $_GET["columnas"];

for ($fila = 1; $fila <= $maxfilas; $fila++) {

    echo "<tr>";

    for ($columnas = 1; $columnas <= $maxcolumnas; $columnas++) {

        echo "<td> (" . $fila . " , " . $columnas . ") </td>";

    }
}
        echo "</tr>";
?>
</table>