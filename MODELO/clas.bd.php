<?php
require_once('../../../cred.php');

class BaseDatos {
    private $host = 'localhost';
    private $dbname = 'escuela';
    private $conn = null;
    
    public function conectar() {
        // Intentar conectarse a la base de datos usando MySQLi
        $this->conn = new mysqli($this->host, USU_CONN, PSW_CONN, $this->dbname);

        // Verificar si la conexión es exitosa
        if ($this->conn->connect_error) {
            die("Error al conectar con la base de datos: " . $this->conn->connect_error);
        }

        // Establecer el conjunto de caracteres a UTF-8
        $this->conn->set_charset("utf8");

        return $this->conn;
    }
}
?>