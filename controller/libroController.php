<?php
include_once 'connection.php';
include __DIR__ . '/../model/libro.php';

session_start();
$action = isset($_POST['action']) ? $_POST['action'] : null;
$action = $action != null ? $action : (isset($_FILES['action']) ? $_FILES['action'] : null);

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

    if($action == 'saveBook'){
        $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $autorId = isset($_POST['autorId']) ? $_POST['autorId'] : null;
        $editorialId = isset($_POST['editorialId']) ? $_POST['editorialId'] : null;
        $price = isset($_POST['price']) ? $_POST['price'] : null;
        $sinopsis = isset($_POST['sinopsis']) ? $_POST['sinopsis'] : null;
        $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : null;
        $pdf = isset($_FILES['pdfFile']) ? $_FILES['pdfFile'] : null;
        $imagen = isset($_FILES['imgFile']) ? $_FILES['imgFile'] : null;

        if($titulo != null && $autorId != null && $editorialId != null && $price != null && $sinopsis != null && $descripcion != null && $pdf != null && $imagen != null){
            $destDir =  __DIR__ . '/../resources/images/';
            $destDirPDF = __DIR__ . '/../resources/pdf/';

            if (!is_dir($destDir)) {
                mkdir($destDir, 0755, true);
            }

            if (!is_dir($destDirPDF)) {
                mkdir($destDirPDF, 0755, true);
            }

            $baseName = basename($pdf['name']);

            while (file_exists($destDirPDF . $baseName)) {
                $info = pathinfo($baseName);
                $baseName = $info['filename'] . "_2." . $info['extension']; // Agregar "_2" al nombre del archivo
            }

            $destPath = $destDirPDF . $baseName;

            if (copy($pdf['tmp_name'], $destPath)) {
                $response['pdfSuccess'] = 'PDF_SAVE';

                $baseNameImage = basename($imagen['name']);

                while (file_exists($destDir . $baseNameImage)) {
                    $info = pathinfo($baseNameImage);
                    $baseNameImage = $info['filename'] . "_2." . $info['extension']; 
                }

                $destPathImage = $destDir . $baseNameImage;

                if (copy($imagen['tmp_name'], $destPathImage)) {
                    $response['imageSuccess'] = 'IMAGE_SAVE';

                    $connection = new Connection();
                    $libroController = new LibroController($connection->getConnection());

                    $fechaActual = date('Y-m-d');
                    $saveBook = $libroController->createNewBook($titulo, $price, $descripcion, $sinopsis, $fechaActual, $editorialId, $baseNameImage, $baseName, $autorId);

                    if($saveBook){
                        $response['success'] = 'BOOK_SAVE';
                    }else{
                        $response['error'] = 'UNDEFINED_ERROR';
                    }
                }else{
                    $response['error'] = 'FAIL_TO_SAVE_IMAGE';
                }
            } else {
                $response['error'] = 'FAIL_TO_SAVE_FILE';
            }
        }else{
            $response['error'] = $titulo;
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

    public function createNewBook($titulo, $precio, $descripcion, $sinopsis, $fechaPublicacion, $editorial, $imageurl, $pdfurl, $autor){
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
            return true;
        }else{
            return false;
        }
    }

    public function getBookList(){
        $libro = new Libro();
        return $libro->listAllBooks($this->connection);
    }
}

?>