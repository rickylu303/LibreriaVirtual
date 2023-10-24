<?php

class Editorial {
    private $ID_editorial;
    private $nombre;
    private $pais;

    public function __construct($ID_editorial, $nombre, $pais) {
        $this->ID_editorial = $ID_editorial;
        $this->nombre = $nombre;
        $this->pais = $pais;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }
}


?>