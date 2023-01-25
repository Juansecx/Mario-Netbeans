<?php
$host = 'localhost';
$root = 'dwes';
$test = 'dwes';
$contra = 'abc123.';

$error = $conexion->connect_errno;

try {

$conexion = new mysqli ($host, $root, $contra, $test);

}catch(Exception $e){
    
    die('Error de conexion: ' .$e->getMessage());
}


$query='SELECT cod, nombre FROM PRODUCTOS';

$resultado=$conexion->query($query);

if($resultado) {
    
    $productos= $resultado->fetch_all();
    
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01
    Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;
              charset=UTF-8">
        <title>Plantilla para Ejercicios Tema 3</title>
        <link href="dwes.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="encabezado">
            <h1>Ejercicio: </h1>
            
            <form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <label>Productos</label>
                
                <select>

                    <option>Bistek</option>
                    <option>Bacalao</option>
                    <option>Sardinas</option>
                    <option>Espinacas</option>

                </select>

                <input type="submit" name="enviar"/>

            </form>
        </div>
        <div id="contenido">
            <h2>Stock del producto en las tiendas</h2>
        </div>
        <div id="pie">
        </div>
    </body>
</html>
