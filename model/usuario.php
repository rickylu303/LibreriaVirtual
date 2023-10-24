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

    // Constructor
    public function __construct($nombre, $apellido, $email, $username, $password, $isActive, $genero) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->isActive = $isActive;
        $this->genero = $genero;
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

    public function crearNuevoUsuario($connection) {
        // Escapar y sanitizar los valores de entrada (para evitar inyección de SQL)
        $nombre = $this->nombre;
        $apellido = $this->apellido;
        $correoElectronico = $this->email;
        $username = $this->username;
        $contrasena = $this->password;
        $genero = $this->genero;
        $isActive = $this->isActive;
    
        // Llamar al procedimiento almacenado "CrearNuevoUsuario"
        $query = "CALL CrearNuevoUsuario(:nombre, :apellido, :correoElectronico, :username, :contrasena, :genero, :isActive)";
        
        $consulta = $connection->prepare($query);
        $consulta->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $consulta->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $consulta->bindParam(':correoElectronico', $correoElectronico, PDO::PARAM_STR);
        $consulta->bindParam(':username', $username, PDO::PARAM_STR);
        $consulta->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
        $consulta->bindParam(':genero', $genero, PDO::PARAM_STR);
        $consulta->bindParam(':isActive', $isActive, PDO::PARAM_INT);
    
        if ($consulta->execute()) {
            // La inserción fue exitosa
            return true;
        } else {
            // Error al ejecutar el procedimiento almacenado
            return false;
        }
    }
    

    function ActualizarUsuario($connection) {
        // Escapar y sanitizar los valores de entrada (para evitar inyección de SQL)
        $userID = mysqli_real_escape_string($connection, $this->ID_usuario);
        $nuevoNombre = mysqli_real_escape_string($connection, $this->nombre);
        $nuevoApellido = mysqli_real_escape_string($connection, $this->apellido);
        $nuevoCorreoElectronico = mysqli_real_escape_string($connection, $this->email);
        $nuevoUsername = mysqli_real_escape_string($connection, $this->username);
        $nuevaContrasena = mysqli_real_escape_string($connection, $this->password);
        $nuevoGenero = mysqli_real_escape_string($connection, $this->genero);
    
        // Llamar al procedimiento almacenado "ActualizarUsuario"
        $query = "CALL ActualizarUsuario(?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $connection->prepare($query);
        $stmt->bind_param("issssss", $userID, $nuevoNombre, $nuevoApellido, $nuevoCorreoElectronico, $nuevoUsername, $nuevaContrasena, $nuevoGenero);
    
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