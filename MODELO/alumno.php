<?php
    require_once("clas.bd.php");

    class alumno{
        private $conn;
        private $id;
        private $dni;
        private $nombre;


        public function __construct(){
            $this->conn=new bd();
            $this->id;
            $this->dni;
            $this->nombre;
        }


        public function get_alumnos($asig){
            $sentencia="SELECT DISTINCT alumno.id,alumno.nombre FROM alumno , alu_asig WHERE alumno.id=alu_asig.id_alum AND alu_asig.id_asig=?;";
            $consulta=$this->conn->__get("conn")->prepare($sentencia);
            $consulta->bind_param("i",$asig);
            $consulta->bind_result($id,$nombre);
            $consulta->execute();

            $alumnos=[];

            while($consulta->fetch()){
                $alumnos[$id]=[$nombre];
            }

            $consulta->close();
            return $alumnos;
        }
    }

?>