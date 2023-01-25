<?php 

//hacer funcion
function comprobarSesion(){
        session_start();
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php?redirigido=true");
        }
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
