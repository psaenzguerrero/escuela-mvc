<?php
    require_once("clas.bd.php");

    class alu_asig{
        private $conn;
        private $id_alum;
        private $id_asig;
        private $nota;


        public function __construct(){
            $this->conn=new bd();
            $this->id_alum="";
            $this->id_asig="";
            $this->nota="";
        }


        public function insertarNota(){
            $senctencia="INSERT INTO alu_asig (id_alum,id_asig,nota)";
        }
    }
?>