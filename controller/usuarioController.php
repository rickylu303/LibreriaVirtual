<?php
include __DIR__ . '/../model/usuario.php';

class UsuarioController{
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function createNewUser($nombre, $apellido, $email, $username, $password, $genero){
        $isActive = 1;
        $usuario = new Usuario($nombre, $apellido, $email, $username, $password, $isActive, $genero);
        $saveUser = $usuario->crearNuevoUsuario($this->connection);

        if($saveUser){
            echo 'Registro actualizado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }
}

?>