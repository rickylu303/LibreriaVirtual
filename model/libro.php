<?php

class Libro {
    private $ID_libro;
    private $titulo;
    private $precio;
    private $descripcion;
    private $sinopsis;
    private $fechaPublicacion;
    private $editorial; // Propiedad para la relación con la tabla "editorial"
    private $image_url;
    private $pdf_url;

    public function __construct() {

    }

    public function getIDLibro() {
        return $this->ID_libro;
    }

    public function setIDLibro($ID_libro) {
        $this->ID_libro = $ID_libro;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getSinopsis() {
        return $this->sinopsis;
    }

    public function setSinopsis($sinopsis) {
        $this->sinopsis = $sinopsis;
    }

    public function getFechaPublicacion() {
        return $this->fechaPublicacion;
    }

    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function getEditorial() {
        return $this->editorial;
    }

    public function setEditorial($editorial) {
        $this->editorial = $editorial;
    }

    public function getImageUrl(){
        return $this->image_url;
    }

    public function setImageUrl($imageUrl) {
        $this->image_url = $imageUrl;
    }

    public function getPdfUrl(){
        return $this->pdf_url;
    }

    public function setPdfUrl($pdf_url) {
        $this->pdf_url = $pdf_url;
    }

    public function crearNuevoLibro($pdo) {
        // Escapar y sanitizar los valores de entrada (si es necesario)
        $titulo = $this->titulo;
        $precio = $this->precio;
        $descripcion = $this->descripcion;
        $sinopsis = $this->sinopsis;
        $fechaPublicacion = $this->fechaPublicacion;
        $idEditorial = $this->editorial->getID_editorial();
        $imageURL = $this->image_url;
        $pdfURL = $this->pdf_url;

        // Llamar al procedimiento almacenado "CrearNuevoLibro"
        $query = "CALL CrearNuevoLibro(:titulo, :precio, :descripcion, :sinopsis, :fechaPublicacion, :idEditorial, :imageURL, :pdfURL)";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $stmt->bindParam(':precio', $precio, PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(':sinopsis', $sinopsis, PDO::PARAM_STR);
        $stmt->bindParam(':fechaPublicacion', $fechaPublicacion, PDO::PARAM_STR);
        $stmt->bindParam(':idEditorial', $idEditorial, PDO::PARAM_INT);
        $stmt->bindParam(':imageURL', $imageURL, PDO::PARAM_STR);
        $stmt->bindParam(':pdfURL', $pdfURL, PDO::PARAM_STR);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
}


?>