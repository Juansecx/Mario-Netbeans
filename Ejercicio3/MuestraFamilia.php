<?php

  require_once './funciones.php';
    //llamar a la funcion para comprobar si la sesion esta abierta
    comprobarSesion();
    $parametrosBD = 'mysql:dbname=Ejercicio3;host=localhost';
    $usuario = "juanse";
    $contra = "juanse19";
    
    
    
    try {
    
        $conexion = new PDO($parametrosBD, $usuario, $contra);
        
        
        $consultaFamilia='SELECT * FROM familia';
        
        $consultaPrep=$conexion->prepare($consultaFamilia);
        
        $conexionquery=$conexion->query($consultaFamilia);
        
        $arrayFamiliaDatos=$conexionquery->fetchAll(PDO::FETCH_OBJ);
        
        
        
        
        
    
    } catch (Exception $ex) {
        
        
        
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Familia</title>
    </head>
    <body>
        
        
        <table border="1px" style="border-collapse: collapse">
            
            <tr>
                
                <td>Codigo</td>
                <td>Nombre</td>
                
            </tr>
            
            <?php foreach ($arrayFamiliaDatos as $value):?>
            
                <tr>
                    
                    <td><a href="./listado_productos.php?familia=<?=$value->cod?>"><?=$value->cod?></a></td>
                    <td><?=$value->nombre?></td>

                </tr>
            
            <?php endforeach;?>
            
            
        </table>
        
        
    </body>
</html>
