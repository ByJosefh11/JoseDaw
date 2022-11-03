<?php
$Nombre = $_GET["Nombre"];
$Apellido1 = $_GET["Apellido1"]; 
$Apellido2 = $_GET["Apellido2"]; 
$Email = $_GET["Email"]; 
$Año = $_GET["Año"]; 
$Movil = $_GET["Movil"]; 

?>

<table>
    <tr>
        <td>Nombre</td><td><?php echo $Nombre;?></td>
    </tr>

    <tr>
        <td>Primer apellido </td><td><?php echo $Apellido1;?></td>
    </tr>

    <tr>
        <td>Segundo apellido</td><td><?php echo $Apellido2;?></td>
    </tr>

    <tr>
        <td>Email</td><td><?php echo $Email;?></td>
    </tr>

    <tr>
        <td>Año</td><td><?php echo $Año;?></td>
    </tr>

    <tr>
        <td>Movil</td><td><?php echo $Movil;?></td>
    </tr>

</table>