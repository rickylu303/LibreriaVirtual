<?php

class Editorial {
    private $ID_editorial;
    private $nombre;
    private $pais;

    public function __construct() {
    }

    public function getID_editorial() {
        return $this->ID_editorial;
    }

    public function setID_editorial($id_editorial) {
        $this->ID_editorial = $id_editorial;
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

    public function crearNuevaEditorial($pdo) {
        $nombre = $this->nombre;
        $pais = $this->pais;
    
        $query = "CALL CrearNuevaEditorial(:nombre, :pais)";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':pais', $pais, PDO::PARAM_STR);
    
        if ($stmt->execute()) {
            // La inserción fue exitosa
            return true;
        } else {
            // Error al ejecutar el procedimiento almacenado
            return false;
        }
    }

    public function actualizarEditorial($pdo) {
        $editorialId = $this->ID_editorial;
        $nombre = $this->nombre;
        $pais = $this->pais;
    
        $query = "CALL ActualizarEditorial(:editorialId, :nombre, :pais)";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':editorialId', $editorialId, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':pais', $pais, PDO::PARAM_STR);
    
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