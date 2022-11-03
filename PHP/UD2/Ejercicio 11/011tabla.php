<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<?php

$numero = $_GET["numero"];

    echo 
        "<thead>
         <th> A </th> <th> * B </th> <th> = AB </th>
        </thead>";


    echo "<tbody>";

        for ($i = 1; $i <= 10; $i++) {

            echo "<tr>
                    <td>" . $numero . "</td> <td> * " . $i . "</td>
                    <td> = " . $numero * $i ."</td>
                </tr>";
    
        }

    echo "</tbody>";
      
?>
</table>
</body>
</html>