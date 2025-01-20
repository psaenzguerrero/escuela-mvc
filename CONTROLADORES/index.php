<?php
    require_once("../MODELO/asignatura.php");
    require_once("../MODELO/alumno.php");
    require_once("../MODELO/alu_asig.php");
    function listarCursoModulo(){
        $asignatura=new asignatura();
        $datos=$asignatura->get_cursos_modulos();
        require_once("../VISTAS/vista1.php");
    }

    function asignaturas(){
        if(isset($_POST)){
            $asignatura=new asignatura();
            $datosAsig=$asignatura->get_asignaturas($_POST["modulo"], $_POST["curso"]);
            require_once("../VISTAS/vista1.php");

        }else{
            listarCursoModulo();
        }
    }


    function calificar(){
        //Aparece otra vista con los alumnos y botón de enviar
        $alum=new alumno();
        $alumnos=$alum->get_alumnos($_POST["asig"]);
        require_once("../VISTAS/vista2.php");
    }


    function poner_nota(){
        //Llamar a la funcion de insert
        $expediente=new alu_asig();

        $expediente->insertarNota($_POST["alum"], $_POST["nota"]);
    }
    



    if(isset($_REQUEST["action"])){
        $action=strtolower($_REQUEST["action"]);

        $action();
    }else{
        //Mostrar la lista de módulos y cursos
        listarCursoModulo();
    }
?>