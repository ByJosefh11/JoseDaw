<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
 
$dinero = $_GET["dinero"];  

?>

<?php
$valores = [500, 200, 100, 50, 20, 10, 5, 2, 1];
$cantidades = [0, 0, 0, 0, 0, 0, 0, 0, 0];

?>

<?php
// Bucle ascendente
for ($i = 0; $i <= 8; $i++) {


    while ($dinero >= $valores [$i]) {
        
        $dinero = $dinero - $valores [$i];

        $cantidades [$i]++;
    }


    if ($valores [$i]<= 2) {

         echo $cantidades [$i] . " monedas de " . $valores[$i];
         
    }
    else {
        echo $cantidades [$i] . " billetes de " . $valores[$i];
    }

    echo "<br>";
}

?>


