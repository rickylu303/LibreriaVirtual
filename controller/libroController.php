<?php
include 'connection.php';
include __DIR__ . '/../model/libro.php';

session_start();
$action = isset($_POST['action']) ? $_POST['action'] : null;

$response = array();

if($action != null && $action != '') {
    if($action == 'listLibros'){

        $connection = new Connection();
        $libroControl = new LibroController($connection->getConnection());

        $libros = $libroControl->getBookList();

        if($libros != null){
            $response['success'] = 'READY';
            $response['listBooks'] = json_encode($libros);
        }else{
            $response['error'] = 'LIST_BOOK_EMPTY';
        }
    }


    exit(json_encode($response));
}else{
    $response['error'] = 'UNDEFINED_ACTION';
    exit(json_encode($response));
}

class LibroController{
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function createNewAutor($titulo, $precio, $descripcion, $sinopsis, $fechaPublicacion, $editorial, $imageurl, $pdfurl, $autor){
        $libro = new Libro();
        $libro->setTitulo($titulo);
        $libro->setprecio($precio);
        $libro->setDescripcion($descripcion);
        $libro->setsinopsis($sinopsis);
        $libro->setFechaPublicacion($fechaPublicacion);
        $libro->setImageurl($imageurl);
        $libro->setPdfurl($pdfurl);
        $libro->setEditorial($editorial);
        $libro->setAutor($autor);

        $saveLibro = $libro->crearNuevoLibro($this->connection);

        if($saveLibro){
            echo 'Registro guardado correctamente';
        }else{
            echo 'Hubo algun error al guardar el usuario';
        }
    }

    public function getBookList(){
        $libro = new Libro();
        return $libro->listAllBooks($this->connection);
    }
}

?>