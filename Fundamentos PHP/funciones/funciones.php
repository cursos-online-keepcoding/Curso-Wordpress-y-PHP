<?php

function saludar($nombre = "Anonimo", $apellido, $edad, $fecha_nacimiento) {

    $respuesta = '';

    if($edad > 30){
        $respuesta = "Hola treinteañero ".$nombre." ".$apellido.' , con edad '.$edad.' , nacido el '.$fecha_nacimiento.'</ br>';
    }else{
        $respuesta = "Hola ".$nombre." ".$apellido.' , con edad '.$edad.' , nacido el '.$fecha_nacimiento."</ br>";
    }

    return $respuesta;
}

// llamar a una funcion
saludar('Gonzalo', 'García', 35, '29 de Septiembre del 2020');
saludar('Pepe', 'García', 35, '29 de Septiembre del 1980');
saludar('María', 'Pérez', 25, 'Abril del 90');



