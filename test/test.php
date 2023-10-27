<?php
include __DIR__ . '/../controller/connection.php';
include __DIR__ . '/../controller/usuarioController.php';

$connector = new Connection();
$connection = $connector -> getConnection();

echo 'Conectado';

?>