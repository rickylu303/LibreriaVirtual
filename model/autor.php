<?php

class Autor {
    private $ID_autor;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $fechaMuerte;
    private $pais;
    private $descripcion;

    public function __construct($ID_autor, $nombre, $apellido, $fechaNacimiento, $fechaMuerte, $pais, $descripcion) {
        $this->ID_autor = $ID_autor;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->fechaMuerte = $fechaMuerte;
        $this->pais = $pais;
        $this->descripcion = $descripcion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getFechaMuerte() {
        return $this->fechaMuerte;
    }

    public function setFechaMuerte($fechaMuerte) {
        $this->fechaMuerte = $fechaMuerte;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
}


?>