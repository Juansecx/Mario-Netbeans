<?php

    $parametrosBD = 'mysql:dbname=Ejercicio3;host=localhost';
    $usuario = "juanse";
    $contra = "juanse19";


 

try {
    
    $conexion = new PDO($parametrosBD, $usuario, $contra);
    
    
     if (isset($_POST['enviar'])) {

        $user = $_POST['usuario'];
        $contraUsuario = md5($_POST['contraseña']);

        $consulta = $conexion->prepare( 'SELECT usuario, password FROM usuarios WHERE usuario = ? AND password = ?');

        $consulta->execute(array($user, $contraUsuario));

        $consultaArray=$consulta->fetchAll(PDO::FETCH_OBJ);
       
        if(count($consultaArray)!= 0) {
            
            session_start();

            $_SESSION['usuario']=$user;

            header('Location: ./MuestraFamilia.php');

        }else {
            
            $mensaje="Error, compruebe los datos introducidos";
        }
     }
    
    
} catch (Exception $ex) {
    
}

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Familia de Productos</title>
        <link rel="stylesheet" href="./form.css"/>
    </head>
    <body>
         <div class="container">
            <div class="header">
                <h1>FORMULARIO DE LOGIN</h1>
            </div>
            <div class="formulario">
                
                <form action="<?php echo $_POST['PHP_SELF']?>" method="POST">
                    <label>Usuario</label>
                    <input type="text" name="usuario" id="nombre" placeholder="Introduzca el usuario">

                    <label>Contraseña</label>
                    <input type="password" name="contraseña" id="contra" placeholder="Introduzca la contraseña">
                    <input type="submit" name="enviar">
   
                    
                    
                     <p><?=$mensaje?></p>
                </form>
                
                
    
                
            </div>
        </div>
    </body>
</html>
