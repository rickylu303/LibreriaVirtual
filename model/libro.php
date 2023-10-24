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

    public function __construct($ID_libro, $titulo, $precio, $descripcion, $sinopsis, $fechaPublicacion, $editorial, $image_url, $pdf_url) {
        $this->ID_libro = $ID_libro;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->sinopsis = $sinopsis;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->editorial = $editorial; // Asigna una instancia de Editorial
        $this->image_url = $image_url;
        $this->pdf_url = $pdf_url;
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
}


?>