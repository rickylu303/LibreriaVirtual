<?php
include 'connection.php';
include __DIR__ . '/../model/usuario.php';

session_start();
$action = isset($_POST['action']) ? $_POST['action'] : null;

$response = array();

if($action != null && $action != '' && $action == 'createUser') {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $confirmPass = isset($_POST['confirmPass']) ? $_POST['confirmPass'] : null;

    if($name != null && $lastname != null && $email != null && $phone != null && $phone != null && $password != null && $confirmPass != null && $password == $confirmPass) {
        $connection = new Connection();
        $userControl = new UsuarioController($connection->getConnection());

        $newUser = $userControl->createNewUser($name, $lastname, $email, $password, $phone);

        if($newUser == 'USER_CREATED'){
            $response['success'] = $newUser;
            $_SESSION['userstatus'] = 'logged';
        }else if($newUser == 'ERROR_EMAIL_ALREADY_USED'){
            $response['error'] = $newUser;
        }else{
            $response['error'] = 'INSERT_FAILED';
        }
    }else{
        $response['error'] = 'EMPTY_FIELDS';
    }

    exit(json_encode($response));
}else{
    $response['error'] = 'UNDEFINED_ACTION';
    exit(json_encode($response));
}

class UsuarioController{
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function createNewUser($nombre, $apellido, $email, $password, $numero){
        $isActive = 1;
        $usuario = new Usuario();
        $usuario -> setNombre($nombre);
        $usuario -> setApellido($apellido);
        $usuario -> setEmail($email);
        $usuario -> setPassword($password);
        $usuario -> setIsActive($isActive);
        $usuario -> setNumero($numero);

        $saveUser = $usuario->crearNuevoUsuario($this->connection);

        return $saveUser;
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