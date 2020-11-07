<?php

$variablebooleana = true; // asigna el valor TRUE a la variable $var

$decimal1 = 1234; // número decimal
$decimal2 = -123; // un número negativo

$string1 = "Esto es una cadena o string en PHP";
$string2 = 'Esto también es una cadena o string en PHP (con comillas simples)';

$float = 1.234; // Esto es un float

// Arrays simples, con referencias y múltiples

$arraynuevo1 = array(12, "Cadena dentro de un array", true, 4.23); // Esto es un array con distintos tipos de datos
$arraynuevo2 = array("Cadena 1", "Cadena 2", "Cadena 3", "Cadena 4"); // Esto es un array con una serie de cadenas de texto.

// OBTENER EL TIPO DE UNA VARIABLE
echo(gettype(string1));

// VISUALIZAR EL CONTENIDO y el TIPO de variables

print_r('<pre>'); // Formatear la salida en pantalla para que sea más legible, implementándome saltos de linea en la

var_dump($variablebooleana);

var_dump($decimal1);
var_dump($decimal2);

var_dump($string1);
var_dump($string2);

var_dump($float);

var_dump($arraynuevo1);
