<?php
$pregunta =  $_GET["pregunta"];

$respuesta = ["Si", "No", "Quizás", "Claro que sí", "Por supuesto que no", "No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña"];

rand (0,8);

$eleccion = rand (0,8);

echo $pregunta;

echo "<br>" . "<br>" ;

echo $respuesta [$eleccion];

?>