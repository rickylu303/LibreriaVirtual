<?php

class Connection {
    private $config;
    private $host;
    private $port;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct() {
        // Establecer la conexión cuando se crea una instancia de la clase
        $this->config = json_decode(file_get_contents(__DIR__ . '/../config.json'), true);
        $this->host = $this->config['database']['host'];
        $this->username = $this->config['database']['username'];
        $this->password = $this->config['database']['password'];
        $this->database = $this->config['database']['dbname'];
        $this->port = $this->config['database']['port'];
        $this->connect();
    }

    private function connect() {
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->database}";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}

?>