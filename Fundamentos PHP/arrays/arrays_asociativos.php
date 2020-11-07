<?php

$juegos = ["Fortnite", "League of Legends", "Doom Eternal", "Final Fantasy X", 'Counter Strike'];

$resultadoPuntacionJuegos = [
    'mas_votado' => $juegos[1],
    'menos_votado' => $juegos[4]
];

print_r('<pre>');
var_dump($juegos[4]);
var_dump($resultadoPuntacionJuegos['menos_votado']);

