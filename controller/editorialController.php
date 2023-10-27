<?php
include __DIR__ . '/../model/editorial.php';

class EditorialController{
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function createNewEditorial($nombre, $pais){
        $editorial = new Editorial();
        $editorial->setNombre($nombre);
        $editorial->setPais($pais);

        $saveEditorial = $editorial->crearNuevaEditorial($this->connection);

        if($saveEditorial){
            echo 'Registro guardado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }

    public function updateEditorial($editorialId, $nombre, $pais){
        $editorial = new Editorial();
        $editorial->setNombre($nombre);
        $editorial->setPais($pais);

        $updateEditorial = $editorial->actualizarEditorial($this->connection);

        if($updateEditorial){
            echo 'Registro actualizado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }
}

?>