<?php

$array = [];

for ($i = 0; $i < 100; $i++) {
    
    if (rand(1,2) == 1 ) {

        $array [] = "M";
    }
    else {

        $array [] = "F";
    }
}

$cuentas =["M" => 0, "F" => 0];


for ($i=0; $i < 100; $i++) { 
    
    if ($array [$i] == "M") {
        
        $cuentas ["M"]++ ;
    }
    else {

        $cuentas ["F"]++ ;
    }
}
    echo "El resultado final es M = " . $cuentas ["M"] . " y F = " .  $cuentas ["F"];
?>