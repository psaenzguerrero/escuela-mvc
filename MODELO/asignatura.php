<?php
    require_once 'clas.bd.php';
    class asignatura {
        private $db;
        public function __construct() {
            $baseDatos = new asignatura();
            $this->db = $baseDatos->conectar();
        }
        public function obtenerAlumnos() {
            
        }
?>