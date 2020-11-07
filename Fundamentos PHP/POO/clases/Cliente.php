<?php

class Cliente {

    private $nombre = null;
    private $apellidos = null;
    private $email = null;
    private $fecha_nacimiento = null;

    public function setName($nombreParam) {
        $this->nombre = $nombreParam;
    }

    public function getName() {
        return $this->nombre;
    }

    public function setLastName($apellidoParam) {
        $this->apellidos = $apellidoParam;
    }
    
    public function getLastName() {
        return $this->apellidos;
    }

    public function getFullName() {

        $nombreCompleto = $this->nombre.' '.$this->apellidos;

        return $nombreCompleto;
    }

}