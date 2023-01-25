
<?php
$parametrosBD = 'mysql:dbname=Ejercicio3;host=localhost';
$usuario = "juanse";
$contra = "juanse19";

try {


    $conexion = new PDO($parametrosBD, $usuario, $contra);

    if (isset($_REQUEST['familia'])) {

        $familia = $_REQUEST['familia'];
    }


    $consultaProducto = $conexion->prepare("SELECT cod, nombre_corto,descripcion,PVP from producto WHERE familia=:familia");

    $consultaProducto->execute(array(":familia" => $familia));

    $dfamilia = $consultaProducto->fetchAll(PDO::FETCH_OBJ);

   
   
    
    if (isset($_POST['enviar'])) {
        
        
        
        $codProdAñadido = $_POST['codProductoAñadido'];
        $nombreProducto = $_POST['nombreProdAñadido'];
        
        
        $arrayDatos=array();
        
        
            
            
            $arrayDatos[$x]=$nombreProducto;
            
        
        
        
        
        
        
       

      
        
        
  
    }
} catch (Exception $ex) {
    
}
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Productos</title>
        <link rel="stylesheet" href="./form.css"/>
    </head>
    <body>

        <table border="1px" style="border-collapse: collapse">

            <tr>
                <th colspan="3">Listado productos</th>


            </tr>

            <?php foreach ($dfamilia as $value): ?>

                <tr>

                <form action="<?php echo $_POST['PHP_SELF'] ?>" method="POST">

                    <input type="hidden" name="codProductoAñadido" value="<?= $value->cod ?>">
                    <input type="hidden" name="nombreProdAñadido" value="<?= $value->nombre_corto ?>">
                    <input type="hidden" name="pvpProdAñadido" value="<?= $value->PVP ?>">

                    <td><input type="submit" name="enviar" value="Añadir"></td>
                    <td> <?= $value->nombre_corto ?>: <?= $value->PVP ?> €</td>

                </form>

            </tr>


        <?php endforeach; ?>


    </table>
        
       <table border="1px" style="border-collapse: collapse">
           
           
            <?php for($i=0;$i<$contador;$i++):?>
           
           <tr>
               
               <td><?=$nombreProducto?></td>
               
           </tr>
           
            <?php endfor;?>
   

</body>
</html>
