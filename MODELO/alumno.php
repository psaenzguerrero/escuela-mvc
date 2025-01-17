<?php
    require_once 'clas.bd.php';
    class alumno {
        private $db;
        public function __construct() {
            $baseDatos = new alumno();
            $this->db = $baseDatos->conectar();
        }
        public function obtenerAlumnos() {
            
        }
?>