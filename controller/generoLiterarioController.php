<?php
include __DIR__ . '/../model/genereroLiterario.php';

class GeneroLiterarioController{
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function createNewGenero($nombre){
        $genero = new GeneroLiterario();
        $genero->setNombre($nombre);

        $saveGenero = $genero->crearNuevoGeneroLiterario($this->connection);

        if($saveGenero){
            echo 'Registro guardado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }

    public function updateAutor($generoId, $nombre){
        $genero = new GeneroLiterario();
        $genero->setId_genero($generoId);
        $genero->setNombre($nombre);

        $updateGenero = $genero->actualizarGeneroLiterario($this->connection);
        if($updateGenero){
            echo 'Registro actualizado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }
}

?>