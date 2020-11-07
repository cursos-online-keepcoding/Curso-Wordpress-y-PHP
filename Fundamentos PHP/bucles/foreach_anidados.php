<?php

$juegos = ["Fortnite", "League of Legends", "Doom Eternal", "Final Fantasy X", 'Counter Strike'];

$resultadoPuntacionJuegos = [
    'mas_votado' => $juegos[1],
    'menos_votado' => $juegos[4]
];

$clientesCompras = [
    'usuario1@gmail.com' => [$juegos[1], $juegos[2], $juegos[4]],
    'usuario2@gmail.com' => [$juegos[3]]
]; 

print_r('<pre>');
//var_dump($clientesCompras);

foreach ($clientesCompras as $nombreCliente => $cliente){
    var_dump('El cliente '.$nombreCliente.' ha comprado :');
    foreach ($cliente as $juegoComprado){
        var_dump('El juego '.$juegoComprado);
    }
}