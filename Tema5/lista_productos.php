<?php
require './BD.php';
require './funciones.php';

comprobarSesion();

/*
$cesta_compra = CestaCompra::cargar_cesta();*/

$claseProducto = new BD();

if (isset($_REQUEST['familia'])) {

    $familia = htmlspecialchars($_REQUEST['familia']);
}

$productos = BD::obtenerProductos($familia);




?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <link rel="stylesheet" href="./estilo.css"/>
    </head>
    <body>

        <header>
            <h2>Listado de productos</h2>
        </header>

        <main class="principal">

            <table class="tabla_productos">


                <tr>

                    <td>Codigo</td>
                    <td>Nombre</td>
                    <td>PVP</td>
                    <td>Carrito</td>

                </tr>

                
                <?php foreach($productos as $value): ?>
                
                    <tr>
                        <td><?=$value['cod']?></td>
                        <td><?=$value['nombre_corto']?></td>
                        <td><?=$value['PVP']?></td>
                        <td>
                            
                            
                                <input type="hidden" name="codigoAñadir" value="<?=$value['cod']?>" id="codigo">
                                <input type="hidden" name="nombreAñadir" value="<?=$value['nombre_corto']?>" id="nombrecito">
                                <button type="submit" name="añadir" id="enviar">Añadir</button>
                            
                           

                        </td>
                    </tr>
                
                <?php endforeach;?>


            </table>


        </main>
        
        <div class="cesta">
            
            
            <header>
                <h2>CESTA</h2>
            </header>
            
            <div class="cestita">
                
                
                
            </div>
            
        </div>
        
        <script src="./script.js"></script>

    </body>
</html>
