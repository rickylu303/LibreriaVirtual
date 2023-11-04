<?php
include __DIR__ . '/../model/autor.php';

class AutorController{
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function createNewAutor($nombre, $apellido, $fechaNacimiento, $fechaMuerte, $pais, $descripcion){
        $autor = new Autor();
        $autor->setNombre($nombre);
        $autor->setApellido($apellido);
        $autor->fechaNacimiento = $fechaNacimiento;
        $autor->fechaMuerte = $fechaMuerte;
        $autor->pais = $pais;
        $autor->descripcion = $descripcion;

        $saveAutor = $autor->crearNuevoAutor($this->connection);

        if($saveAutor){
            echo 'Registro guardado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }

    public function updateAutor($autorId, $nombre, $apellido, $fechaNacimiento, $fechaMuerte, $pais, $descripcion){
        $autor = new Autor();
        $autor->setId_autor($autorId);
        $autor->setNombre($nombre);
        $autor->setApellido($apellido);
        $autor->fechaNacimiento = $fechaNacimiento;
        $autor->fechaMuerte = $fechaMuerte;
        $autor->pais = $pais;
        $autor->descripcion = $descripcion;

        $updateAut = $autor->actualizarAutor($this->connection);

        if($updateAut){
            echo 'Registro actualizado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }

    public function listAllAutors(){
        return (new Autor())->listAllAutors($this->connection);
    }
}

?>