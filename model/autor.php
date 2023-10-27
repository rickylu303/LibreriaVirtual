<?php

class Autor {
    private $ID_autor;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $fechaMuerte;
    private $pais;
    private $descripcion;

    public function __construct() {
        
    }

    public function getID_autor() {
        return $this->ID_autor;
    }

    public function setId_autor($id_autor) {
        $this->ID_autor = $id_autor;
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

    public function crearNuevoAutor($pdo) {
        // Escapar y sanitizar las propiedades de la clase
        $nombre = $this->nombre;
        $apellido = $this->apellido;
        $fechaNacimiento = $this->fechaNacimiento;
        $fechaMuerte = $this->fechaMuerte;
        $pais = $this->pais;
        $descripcion = $this->descripcion;

        // Llamar al procedimiento almacenado "CrearNuevoAutor"
        $query = "CALL CrearNuevoAutor(:nombre, :apellido, :fechaNacimiento, :fechaMuerte, :pais, :descripcion)";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':fechaNacimiento', $fechaNacimiento, PDO::PARAM_STR);
        $stmt->bindParam(':fechaMuerte', $fechaMuerte, PDO::PARAM_STR);
        $stmt->bindParam(':pais', $pais, PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);

        if ($stmt->execute()) {
            // La inserción fue exitosa
            return true;
        } else {
            // Error al ejecutar el procedimiento almacenado
            return false;
        }
    }

    public function actualizarAutor($pdo) {
        $autorId = $this->ID_autor;
        $nombre = $this->nombre;
        $apellido = $this->apellido;
        $fechaNacimiento = $this->fechaNacimiento;
        $fechaMuerte = $this->fechaMuerte;
        $pais = $this->pais;
        $descripcion = $this->descripcion;

        // Llamar al procedimiento almacenado "ActualizarAutor"
        $query = "CALL ActualizarAutor(?, :nombre, :apellido, :fechaNacimiento, :fechaMuerte, :pais, :descripcion)";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(1, $autorId, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':fechaNacimiento', $fechaNacimiento, PDO::PARAM_STR);
        $stmt->bindParam(':fechaMuerte', $fechaMuerte, PDO::PARAM_STR);
        $stmt->bindParam(':pais', $pais, PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);

        if ($stmt->execute()) {
            // La actualización fue exitosa
            return true;
        } else {
            // Error al ejecutar el procedimiento almacenado
            return false;
        }
    }
}


?>