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
        $nombre = strip_tags($this->nombre);
        $apellido = strip_tags($this->apellido);
        $correoElectronico = strip_tags($this->email);
        $username = strip_tags($this->username);
        $contrasena = $this->password;
        $genero = strip_tags($this->genero);
        $isActive = $this->isActive;
        $numero = strip_tags($this->numero);
    
        // Llamar al procedimiento almacenado "CrearNuevoUsuario"
        $query = "CALL CrearNuevoUsuario(:nombre, :apellido, :correoElectronico, :username, :contrasena, :genero, :numero, :isActive)";
        
        $consulta = $connection->prepare($query);
        $consulta->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $consulta->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $consulta->bindParam(':correoElectronico', $correoElectronico, PDO::PARAM_STR);
        $consulta->bindParam(':username', $username, PDO::PARAM_STR);
        $consulta->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
        $consulta->bindParam(':genero', $genero, PDO::PARAM_STR);
        $consulta->bindParam('numero', $numero, PDO::PARAM_STR);
        $consulta->bindParam(':isActive', $isActive, PDO::PARAM_INT);
    
        if ($consulta->execute()) {
            $resultado = $consulta->fetchColumn();
            return $resultado;
        } else {
            return 'ERROR';
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

    public function loginUser($connection) {
        // Escapar y sanitizar los valores de entrada (si es necesario)
        $email = filter_var($this->email, FILTER_SANITIZE_EMAIL); // Sanitizar el correo electrónico
    
        // Consulta SQL para buscar al usuario por correo electrónico y contraseña
        $query = "SELECT Nombre FROM usuario WHERE Correo_electronico = :email AND password = :password LIMIT 1";
        
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
    
        $stmt->execute();
    
        // Obtener el resultado (nombre del usuario)
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($result) {
            return $result['Nombre'];
        } else {
            return null;
        }
    }
    
}


?>