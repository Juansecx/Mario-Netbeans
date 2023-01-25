<?php

class BD {

    public static function obtenerFamilias() {

        $cadena_conexion = 'mysql:dbname=Ejercicio3;host:127.0.0.1';
        $usuario = 'juanse';
        $contra = 'juanse19';

        try {

            $bd = new PDO($cadena_conexion, $usuario, $contra);
            
             $consultaFamilia='SELECT * FROM familia';
        
            $consulta_prep = $bd->query($consultaFamilia);
            
            $arrayFamilia = $consulta_prep->fetchAll(PDO::FETCH_ASSOC);
            
            return $arrayFamilia;
            
        } catch (Exception $ex) {
            
        }
    }

    public static function obtenerProductos($familia) {

       
    
        $cadena_conexion = 'mysql:dbname=Ejercicio3;host:127.0.0.1';
        $usuario = 'juanse';
        $contra = 'juanse19';

        try {

            $bd = new PDO($cadena_conexion, $usuario, $contra);
            
             $consultaFamilia='SELECT cod, nombre_corto, PVP FROM producto WHERE familia=:family';
        
            $consulta_prep = $bd->prepare($consultaFamilia);
            
            $parametros =[':family'=>$familia];
            
            $consulta_prep->execute($parametros);
            
            $arrayFamilia = $consulta_prep->fetchAll(PDO::FETCH_ASSOC);
            
            return $arrayFamilia;
            
        } catch (Exception $ex) {
            
        }
    }

    public static function verificaCliente($nombre, $clave) {

        $parametrosBD = 'mysql:dbname=Ejercicio3;host=localhost';
        $usuario = "juanse";
        $contra = "juanse19";

        try {

            $conexion_bd = new PDO($parametrosBD, $usuario, $contra);

            $consulta = "SELECT usuario, password FROM usuarios WHERE usuario=:user";

            $consulta_prep = $conexion_bd->prepare($consulta);

            $parametros = [':user' => $nombre];

            $consulta_prep->execute($parametros);

            $fila = $consulta_prep->fetch(PDO::FETCH_ASSOC);
            
            if(is_array($fila)){
                
                if(password_verify($nombre, $clave)){
                    
                    return true;
                    
                }else{
                    return false;
                }
            }

           
        } catch (Exception $ex) {

            echo 'Hay un pequeño error: ' . $ex->getMessage();
        }
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina</title>
    </head>
    <body>

    </body>
</html>
