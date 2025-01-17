<?php
    require_once 'clas.bd.php';
    class alu_asig {
        private $db;
        public function __construct() {
            $baseDatos = new alu_asig();
            $this->db = $baseDatos->conectar();
        }
        
?>