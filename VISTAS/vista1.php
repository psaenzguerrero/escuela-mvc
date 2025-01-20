<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../CONTROLADORES/index.php" method="post">
        <label for="modulo">MODULO</label><br>
        <?php
            if(isset($datos)){
                foreach ($datos['modulos'] as $value) {
                    echo "<input type='radio' name='modulo' value='$value'>$value<br>";
                }
            }else{
                echo "<p>No hay array de modulos</p>";
            }
        ?> 
        <label for="curso">CURSO</label><br>
    
        <?php
            if(isset($datos)){
                foreach ($datos['cursos'] as $value) {
                    echo "<input type='radio' name='curso' value='$value'>$value º<br>";
                }
            }else{
                echo "<p>No hay array</p>";
            }
        ?> 


    <?php
        if(isset($datosAsig)){
            echo '<label for="">Elige la Asignatura:</label><br>
                    <select name="asig">';
            foreach ($datosAsig as $key => $value) {
                echo "<option value='$key'>$value</option>";
            }
            echo "</select><br>";
            echo '<input type="submit" value="Calificar" name="action">
            <input type="submit" value="Ver" name="action">';
        }else{
            echo '<input type="submit" value="asignaturas" name="action">';
        }
    ?><br>
            
            
        </form>
</body>

</html>