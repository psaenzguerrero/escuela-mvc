<?php
require_once('../../../cred.php');

class bd {

    private $conn;
    
    public function __construct() {
        // Intentar conectarse a la base de datos usando MySQLi
        $this->conn=new mysqli("localhost",USU_CONN,PSW_CONN,"escuela");

        // Verificar si la conexión es exitosa
        if ($this->conn->connect_error) {
            die("Error al conectar con la base de datos: " . $this->conn->connect_error);
        }

        // Establecer el conjunto de caracteres a UTF-8
        $this->conn->set_charset("utf8");
    }

    public function __get($nom){
        return $this->$nom;
    }
}
?>