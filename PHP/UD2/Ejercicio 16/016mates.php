<?php

for ($i = 0; $i < 33; $i++) {


    $array [] = rand (0,100);

}

    echo "El numero mayor es " . max ($array);
    echo "<br>" . "<br>";
    echo "El numero menor es " . min ($array);
    echo "<br>" . "<br>";
    echo "La media es " . array_sum($array)/33;
    
?>