<?php
if (isset($_POST['enviar'])) {

    $filas = $_POST['filas'];

    $columnas = $_POST['columnas'];

    if ($filas > 200 && $columnas > 200) {

        $mensaje = "Por favor introduzca un numero de filas y columnas menor de 200";
        $estilo = "red";
        
    } else if ($filas > 200) {

        $mensaje = "Por favor introduzca un numero de filas menor de 200";
        $estilo = "red";
        
    } else if ($columnas > 200) {

        $mensaje = "Por favor introduzca un numero de columnas menor de 200";
        $estilo = "red";
        
    }
}

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablas Prueba</title>
    </head>
    <body>

        <header>
            <h1>Formulario Aunteticacion</h1>   
        </header>

        <main>

            <form action="./tabla.php" method="POST">

                <label>Filas: </label>
                <input type="text" name="filas">

                <label>Columnas: </label>
                <input type="text" name="columnas">

                <input type="submit" name="enviar" value="Enviar">

            </form>


        </main>

        <p style="color:<?=$estilo?>"><?=$mensaje?></p>

    </body>
</html>
