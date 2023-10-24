<?php
include __DIR__ . '/../controller/connection.php';
include __DIR__ . '/../controller/usuarioController.php';

$connector = new Connection();
$connection = $connector -> getConnection();

$controlador = new UsuarioController($connection);
$controlador->createNewUser('Gabriel', 'Flores', 'gafo@test.com', 'gafo', 'contraTest', 'Masculino');

?>