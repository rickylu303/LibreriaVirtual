<?php

class GeneroLiterario {
    private $ID_genero;
    private $nombre;

    public function __construct() {
        
    }

    public function getID_genero() {
        return $this->ID_genero;
    }

    public function setId_genero($id_genero) {
        $this->ID_genero = $id_genero;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function crearNuevoGeneroLiterario($pdo) {
        $nombre = $this->nombre;
    
        $query = "CALL CrearNuevoGeneroLiterario(:nombre)";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    
        if ($stmt->execute()) {
            // La inserción fue exitosa
            return true;
        } else {
            // Error al ejecutar el procedimiento almacenado
            return false;
        }
    }

    public function actualizarGeneroLiterario($pdo) {
        $generoId = $this->ID_genero;
        $nombre = $this->nombre;
    
        $query = "CALL ActualizarGeneroLiterario(:generoId, :nombre)";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':generoId', $generoId, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    
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