<?php

class Usuario {
    private $ID_usuario;
    private $nombre;
    private $apellido;
    private $email;
    private $username;
    private $password;
    private $isActive;
    private $genero;
    private $numero;

    // Constructor
    public function __construct() {
        $genero = '';
        $username = '';
    }

    public function getIdUsuario() {
        return $this->ID_usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getIsActive() {
        return $this->isActive;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setIdUsuario($id_usuario) {
        $this->ID_usuario = $id_usuario;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setIsActive($isActive) {
        $this->isActive = $isActive;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function crearNuevoUsuario($connection) {
        // Escapar y sanitizar los valores de entrada (para evitar inyección de SQL)
        $nombre = $this->nombre;
        $apellido = $this->apellido;
        $correoElectronico = $this->email;
        $username = $this->username;
        $contrasena = $this->password;
        $genero = $this->genero;
        $isActive = $this->isActive;
        $numero = $this->numero;
    
        // Llamar al procedimiento almacenado "CrearNuevoUsuario"
        $query = "CALL CrearNuevoUsuario(:nombre, :apellido, :correoElectronico, :username, :contrasena, :genero, :isActive, :numero)";
        
        $consulta = $connection->prepare($query);
        $consulta->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $consulta->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $consulta->bindParam(':correoElectronico', $correoElectronico, PDO::PARAM_STR);
        $consulta->bindParam(':username', $username, PDO::PARAM_STR);
        $consulta->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
        $consulta->bindParam(':genero', $genero, PDO::PARAM_STR);
        $consulta->bindParam(':isActive', $isActive, PDO::PARAM_INT);
        $consulta->bindParam('numero', $numero, PDO::PARAM_STR);
    
        if ($consulta->execute()) {
            // La inserción fue exitosa
            return true;
        } else {
            // Error al ejecutar el procedimiento almacenado
            return false;
        }
    }
    

    public function ActualizarUsuario($pdo) {
        // Escapar y sanitizar los valores de entrada (para evitar inyección de SQL)
        $userID = $this->ID_usuario;
        $nuevoNombre = $this->nombre;
        $nuevoApellido = $this->apellido;
        $nuevoCorreoElectronico = $this->email;
        $nuevoUsername = $this->username;
        $nuevaContrasena = $this->password;
        $nuevoGenero = $this->genero;
        $numero = $this->numero;
    
        // Llamar al procedimiento almacenado "ActualizarUsuario"
        $query = "CALL ActualizarUsuario(?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(1, $userID, PDO::PARAM_INT);
        $stmt->bindParam(2, $nuevoNombre, PDO::PARAM_STR);
        $stmt->bindParam(3, $nuevoApellido, PDO::PARAM_STR);
        $stmt->bindParam(4, $nuevoCorreoElectronico, PDO::PARAM_STR);
        $stmt->bindParam(5, $nuevoUsername, PDO::PARAM_STR);
        $stmt->bindParam(6, $nuevaContrasena, PDO::PARAM_STR);
        $stmt->bindParam(7, $nuevoGenero, PDO::PARAM_STR);
        $stmt->bindParam(8, $numero, PDO::PARAM_STR);
    
        if ($stmt->execute()) {
            // La actualización fue exitosa
            return true;
        } else {
            // Error al ejecutar el procedimiento almacenado
            return false;
        }
    }
    
    

    public function inactivarUsuario($connection){
        $query = "CALL InactivarUsuario(?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("i", $this->ID_usuario);

        if ($stmt->execute()) {
            // El usuario fue inactivado con éxito
            return true;
        } else {
            // Error al ejecutar el procedimiento almacenado
            return false;
        }
    }
}


?>