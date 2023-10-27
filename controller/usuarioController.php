<?php
include __DIR__ . '/../model/usuario.php';

class UsuarioController{
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function createNewUser($nombre, $apellido, $email, $password){
        $isActive = 1;
        $usuario = new Usuario();
        $usuario -> setNombre($nombre);
        $usuario -> setApellido($apellido);
        $usuario -> setEmail($email);
        $usuario -> setPassword($password);
        $usuario -> setIsActive($isActive);

        $saveUser = $usuario->crearNuevoUsuario($this->connection);

        if($saveUser){
            echo 'Registro actualizado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }

    public function updateUser($userId, $nombre, $apellido, $email, $password, $numero){
        $usuario = new Usuario();
        $usuario -> setIdUsuario($userId);
        $usuario -> setNombre($nombre);
        $usuario -> setApellido($apellido);
        $usuario -> setEmail($email);
        $usuario -> setPassword($password);
        $usuario -> setNumero($numero);

        $updateUs = $usuario->ActualizarUsuario($this->connection);

        if($updateUs){
            echo 'Registro actualizado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }

    public function inactivateUser($userId){
        $usuario = new Usuario();
        $usuario -> setIdUsuario($userId);
        $userInactive = $usuario->inactivarUsuario($this->connection);

        if($userInactive){
            echo 'Registro inactivado correctamente';
        }else{
            echo 'Hubo algun error al inactivar el usuario';
        }
    }
}

?>