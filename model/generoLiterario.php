<?php

class GeneroLiterario {
    private $ID_genero;
    private $nombre;

    public function __construct($ID_genero, $nombre) {
        $this->ID_genero = $ID_genero;
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}


?>