<?php
$cadena_conexion = 'mysql:dbname=pruebaJuegos;host:127.0.0.1';
$usuario = 'juanse';
$contra = 'juanse19';

try {

    $bd = new PDO($cadena_conexion, $usuario, $contra);

    $consulta = 'SELECT cod, nombre FROM tienda';

    $consultraPrep = $bd->prepare($consulta);

    $queryResultado = $bd->query($consulta);

    $resultadoArray = $queryResultado->fetchAll(PDO::FETCH_OBJ);

    if (isset($_POST['enviar'])) {

        $tiendaCod = $_POST['tiendas'];

        foreach ($resultadoArray as $value) {

            if ($value->cod == $tiendaCod) {

                $nombreJuego = $value->nombre;
            }
        }

        $consultaJuegos = 'SELECT * FROM tienda INNER JOIN juegos ON tienda.cod=juegos.cod WHERE juegos.cod= '.$tiendaCod;

        $queryJuegos = $bd->query($consultaJuegos);

        if ($queryJuegos) {

            $queryFinal = $queryJuegos->fetchAll(PDO::FETCH_OBJ);
        }
    }
} catch (Exception $e) {

    die('Conexion a la base de datos fallida: ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JUEGOS</title>
        <link rel="stylesheet" type="text/css" href="./estilo.css">
    </head>
    <body>

        <header>
            <h1>CONEXION PRUEBAJUEGOS</h1>

            <header2>

                <form id="form_selection" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label>Seleccione una tienda</label>
                    <select name="tiendas">

                        <?php foreach ($resultadoArray as $value): ?>

                            <?php if ($tiendaCod == $value->cod): ?>
                                <option value="<?= $value->cod ?>" selected> <?= $value->nombre ?> </option>
                            <?php else: ?>
                                <option value="<?= $value->cod ?>"> <?= $value->nombre ?> </option>
                            <?php endif; ?>

                        <?php endforeach; ?>
                                
                                <input type="submit" name="enviar" value="Enviar">

                    </select> 

                    

                </form>

            </header2>
        </header>

        <main>

            <?php if (isset($tiendaCod)): ?>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                    <table>

                        <tr>

                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Genero</td>
                            <td>Rating</td>
                            <td>Precio</td>
                            <td>Stock</td>

                        </tr>

                        <?php print_r($queryFinal);?>
                        
                        <?php foreach ($queryFinal as $value): ?>

                            <tr>

                                <td><?= $value->cod ?></td>
                                <td><?= $value->nombre ?></td>
                                <td><?= $value->genero ?></td>
                                <td><?= $value->rating ?></td>
                                <td><?= $value->precio ?></td>
                                <td><?= $value->stock ?></td>

                            </tr>
                        <?php endforeach; ?>



                    </table>

                    <input type="hidden" name="tiendas" value="<?= $tiendaCod ?>">
                </form>
            <?php endif; ?>

        </main>




    </body>
</html>
