<?php
$numero = $_GET["numero"];

function contraseña($n) {

    $array = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r",
    "s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9"];

    $texto = "";


    for ($i=0; $i < $n ; $i++) { 
        
        $nuevaletra = $array [rand(0,35)];

        $texto = $texto . $nuevaletra;
    }
    return $texto;

}
    

echo contraseña ($numero);

?>