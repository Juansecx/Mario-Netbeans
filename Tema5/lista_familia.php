<?php
require './BD.php';
require './Familia.php';

require './funciones.php';

comprobarSesion();
?>

<?php

$claseBD = new BD();

$arrayFamily = $claseBD->obtenerFamilias();

$claseFamilia = new Familia($arrayFamily);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Familia</title>
        <link rel="stylesheet" href="./estilo.css"/>
    </head>
    <body>

        <header>
            <h2>Lista de familias</h2>
        </header>

        <main>

            <table>

                <tr>
                    <td>Codigo</td>
                    <td>Nombre</td>
                </tr>

                <?php foreach ($arrayFamily as $value): ?>

                    <tr>

                        <td><a href="./lista_productos.php?familia=<?=$value['cod']?>"><?= $value['cod'] ?></a></td>
                        <td><?= $value['nombre']?></td>

                    </tr>

                <?php endforeach; ?>



            </table>

        </main>

    </body>
</html>
