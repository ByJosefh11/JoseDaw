<?php
function obtenerCapital($pais = "todos")
{
    $capitales = array("Italia" => "Roma",
        "Francia" => "Paris",
        "Portugal" => "Lisboa");

    if ($pais == "todos") {
        return array_values($capitales);
    }
    else {
        return $capitales[$pais];
    }
}

print_r(obtenerCapital());
echo "<br/>";
echo obtenerCapital("Francia");


function saluda($nombre, $prefijo = "Sr") {
    echo "Hola ".$prefijo." ".$nombre;
}

saluda("H´ctor", "Mr");
saluda("Héctor");
saluda("Olga", "Srta");
