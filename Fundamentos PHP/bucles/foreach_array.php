<?php

$juegos = ["Fortnite", "League of Legends", "Doom Eternal", "Final Fantasy X", 'Counter Strike'];

print_r('<pre>');
var_dump($juegos);

foreach ($juegos as $posicion => $juego) {
    var_dump("La posición ".$posicion." del array Juegos es ".$juego);
}

