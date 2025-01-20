<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../CONTROLADORES/index.php" method="post">
        <label for="">Elige el alumno:</label><br>
        <select name="alum">
    <?php
        if(isset($alumnos)){
            foreach ($alumnos as $key => $value) {
                echo "<option value='$key'>$value[0]</option>";
            }
        }else{
            echo "No hay array";
        }
    ?>
        </select><br><br>
        <label for="nota">Introduce la nota</label><br>
        <input type="number" name="nota" step="0.1"><br><br>

        <input type="submit" value="poner_nota" name="action">
    </form>
</body>
</html>