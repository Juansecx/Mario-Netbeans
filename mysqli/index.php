<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01
    Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php
//Declaramos variables para la conexión
$host = '127.0.0.1';
$usuarioBd = 'dwes';
$password = 'abc123.';
$nombreBd = 'dwes';
$cod_enviado = null;

//Creamos mensaje
$mensaje = 'mensaje no editado';




//Creamos la conexión con la BD usando atributos
/* Primera forma de hacerlo:
 * 
  $conexion = new mysqli();
  $conexion-> mysqli_connect($host, $usuarioBd, $password, $nombreBd );

 * Mejor forma de hacerlo (Lo hacemos dentro de un try catch: */

//Vemos si ha ocurrido un error
try {

    $conexion = new mysqli($host, $usuarioBd, $password, $nombreBd);

    $query = 'SELECT cod, nombre FROM producto';

    $resultado = $conexion->query($query);  //puede devolver false si no se conecta, o un objeto de la clase mysqli_use_result

    if ($resultado) {

        $productos = $resultado->fetch_all(MYSQLI_ASSOC);
    }

    if (isset($_POST['enviar'])) {
        //Creamos variable para recoger el código del producto enviado por el formulario
        $cod_enviado = $_POST["cod_prod"];

        foreach ($productos as $value) {

            if ($value['cod'] == $cod_enviado) {

                $nombre_prod = $value['nombre'];
            }
        }

        $consulta_stock = "SELECT tienda.nombre, stock.unidades, tienda.cod as cod_tienda FROM stock "
                . "INNER JOIN tienda ON stock.tienda=tienda.cod WHERE stock.producto='" . $cod_enviado . "'";

        $resultado_stock = $conexion->query($consulta_stock);

        if ($resultado_stock) {
            $stock = $resultado_stock->fetch_all(MYSQLI_ASSOC);
        }
    }
} catch (Exception $e) {
    die('<p>Error conexión: ' . $e->getMessage() . '</p>');
}
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;
              charset=UTF-8">
        <title>Plantilla para Ejercicios Tema 3</title>
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- <pre> <?php //print_r($productos)   ?></pre> Con la etiqueta <pre> te formatea la salida del array-->
        <div id="encabezado">
            <h1>Ejercicio: </h1>
            <form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label>Productos</label>
                <select name="cod_prod">
                    <?php foreach ($productos as $value): ?>
                        <?php if ($cod_enviado == $value["cod"]) : ?>    <!--para ver si he enviado el formulario, mostrar el producto que he enviado-->
                            <option value="<?= $value["cod"] ?>" selected> <?= $value["nombre"] ?> </option>
                        <?php else: ?>
                            <option value="<?= $value["cod"] ?>"> <?= $value["nombre"] ?> </option>
                        <?php endif ?>
                    <?php endforeach ?>
                </select>
                <input type="submit" name= "enviar" value="Enviar"/>
            </form>
        </div>
        <div id="contenido">



            <?php if (isset($cod_enviado) && $stock[0]['unidades'] != 0): //Si tengo código enviado  ?>


                <h2>Stock del producto <?= $nombre_prod?> en las tiendas</h2>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                   <table border="1" style="border-collapse:collapse">



                        <tr>

                            <td>Tienda</td>
                            <td>Nombre</td>
                            <td>Unidades</td>
                            
                        </tr>

                        <?php foreach($stock as $valor) : ?>
                        
                        <tr>
                            
                            <td><?=$valor['nombre']?></td>
                            <td><?=$nombre_prod?></td>
                            <td><?=$valor['unidades']?></td>   
                        </tr>

                        <?php endforeach;?>

                    </table>

                    <input type="hidden" name="cod_prod" value="<?= $cod_enviado ?>">
                    
                    <br>
                    
                    <input type="submit" name="modificar" value="Modificar">
                    
                </form>
                
            <?php elseif (isset($stock) && $stock[0]['unidades'] == 0): ?>

                <p>No queda stock del producto seleccionado <?=$nombre_prod?>.</p>
                
            <?php endif ?>
                
                
          
                
                
        </div>
        <div id="pie">
        </div>
    </body>
</html>


