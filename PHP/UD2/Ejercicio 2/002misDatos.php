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
        $Nombre = "Jose";
    $Primerapellido = "Fernandez"; 
    $Segundoapellido = "Herrera"; 
    $Email = "josefernandezherrera@gmail.com";
    $Añondenacimiento = 2002; 
    $Movil = 601349494;
?>

<table>
    <tr>
        <td>Nombre</td><td><?php echo $Nombre;?></td>
    </tr>

    <tr>
        <td>Primer apellido </td><td><?php echo $Primerapellido;?></td>
    </tr>

    <tr>
        <td>Segundo apellido</td><td><?php echo $Segundoapellido;?></td>
    </tr>

    <tr>
        <td>Email</td><td><?php echo $Email;?></td>
    </tr>

    <tr>
        <td>Año</td><td><?php echo $Añondenacimiento;?></td>
    </tr>

    <tr>
        <td>Movil</td><td><?php echo $Movil;?></td>
    </tr>

</table>
    
</body>
</html>

