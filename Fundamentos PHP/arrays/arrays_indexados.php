<?php

$juegos = ["Fortnite", "League of Legends", "Doom Eternal", "Final Fantasy X", 'Counter Strike'];

/*
Este es el metodo largo para la creacion de arrays, donde cada uno de los
arreglos esta en una linea diferente, junto con su valor indice correspondiente
*/
$dia[0] = "domingo";
$dia[1] = "lunes";
$dia[2] = "martes";
$dia[3] = "miercoles";
$dia[4] = "jueves";
$dia[5] = "viernes";
$dia[6] = "sabado";

//mostrar el miercoles
echo $dia[3]; 

print_r('<pre>');
var_dump($juegos);
var_dump($juegos[count($juegos) - 1]);

