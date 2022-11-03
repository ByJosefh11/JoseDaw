<?php

$anyoActual = date("Y"); 
$edad = $_GET["edad"];  
$jubilacion = 67 - $edad;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php echo "Estamos en el año " . $anyoActual . " supongamos que nuestro usuario tenga " . $edad . " años de edad."; ?>

<br>
<br>

<?php echo "En el año " . $anyoActual + 10 . " el usuario tendría que tener " . $edad + 10 . " años de edad." ;?>

<br>
<br>

<?php echo "En el año " . $anyoActual - 10 . " el usuario tuvo que tener " . $edad - 10 . " años de edad." ;?>

<br>
<br>

<?php echo "Se jubilará cuando pase más de " . $jubilacion . " años de edad y en el año " . $anyoActual + $jubilacion . "." ;?>

</body>
</html>