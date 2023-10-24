<?php

class Directories{
    private $root_dir; 

    public function __construct(){
        $this -> root_dir = __DIR__ . '/..';
    }

    public function get_root_dir(){
        return $this -> root_dir;
    }
}

?>