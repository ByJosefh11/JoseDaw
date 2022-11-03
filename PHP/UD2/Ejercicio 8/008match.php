<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <?php

        /* La expresión match es similar a una sentencia switch pero tiene algunas diferencias clave:

            ·Un brazo de match compara los valores estrictamente (===) en lugar de hacerlo de forma suelta como lo hace la sentencia switch.
            ·Una expresión match retorna un valor.
            ·Los brazos de Match no pasan a casos posteriores como lo hacen las sentencias switch.
            ·Una expresión match debe ser completa.*/

            $x = $_GET["x"]; 
            $sumar1 = match ($x) {
             
                "1" => 2,
                "2" => 3,
                "3" => 4,
            };

            echo "$sumar1";

    ?>
</body>
</html>