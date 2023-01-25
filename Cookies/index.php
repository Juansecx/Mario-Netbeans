<?php
if (isset($_COOKIE['visitas'])) {

    setcookie('visitas', $_COOKIE['visitas'] + 1, time() + 3600 * 24);

    $mensaje = "Numero de visitas " . $_COOKIE['visitas'] . " Nombre de la cookie " . $_COOKIE['visitas'];
} else {

   
        setcookie("visitas", 1, time() + 3600 * 24);
        $mensaje = "Bienvenido por primera vez a nuestra web";
    

}




?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba</title>
    </head>
    <body>

        <p><?= $mensaje ?></p>
        </br>
        <button onclick=" crearCookie()">Crea la cookie</button>


    </body>
</html>