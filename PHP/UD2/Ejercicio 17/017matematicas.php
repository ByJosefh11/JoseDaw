<?php

    declare(strict_types=1);
    function digitos (int $num): int{

        $texto = $num."";

        return strlen ($texto);

    }

    echo digitos (123456789) . "<br>"; 


    function digitoN (int $num, int $pos): int{

        $texto = $num."";

    $digitotxt=substr($texto,$pos-1,1);
    $digitonum=intval($digitotxt);
    return $digitonum;        

    }
    echo digitoN (123456789, 5) . "<br>";


    function quitaPorDetras (int $num, int $cant): int{

        $texto = $num."";

        $textoresultado = substr($texto, 0, strlen($texto) - $cant);
        $digitonum=intval($textoresultado);
        return $digitonum;   

    }

    echo quitaPorDetras (123456789, 5) . "<br>";



    function quitaPorDelante (int $num, int $cant): int{

        $texto = $num."";

        $textoresultado = substr($texto, $cant, strlen($texto) - $cant);
        $digitonum=intval($textoresultado);
        return $digitonum;   

    }

    echo quitaPorDelante (123456789, 5) . "<br>";
    echo quitaPorDelante (cant:3, num:123456789);
?>