<?php
include __DIR__ . '/../model/libro.php';

class LibroController{
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function createNewAutor($titulo, $precio, $descripcion, $sinopsis, $fechaPublicacion, $editorial, $imageurl, $pdfurl){
        $libro = new Libro();
        $libro->setTitulo($titulo);
        $libro->setprecio($precio);
        $libro->setDescripcion($descripcion);
        $libro->setsinopsis($sinopsis);
        $libro->setFechaPublicacion($fechaPublicacion);
        $libro->setImageurl($imageurl);
        $libro->setPdfurl($pdfurl);
        $libro->setEditorial($editorial);


        $saveLibro = $libro->crearNuevoLibro($this->connection);

        if($saveLibro){
            echo 'Registro guardado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }
}

?>