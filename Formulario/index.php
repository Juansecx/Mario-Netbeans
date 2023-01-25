
<?php
$parametrosBD = 'mysql:dbname=empresa;host=localhost';
$usuario = "juanse";
$contra = "juanse19";

if(isset($_REQUEST['redirigido'])){
    
    $mensaje="Debes poner el nombre de usuario y la contraseña";
    
}

if(isset($_REQUEST['cerrar'])){
    
    $mensaje="La sesión se cerró correctamente";
    
}

try {


    $conexion = new PDO($parametrosBD, $usuario, $contra);

    if (isset($_POST['enviar'])) {

        $user = $_POST['usuario'];
        $contraUsuario = md5($_POST['contraseña']);

        $consulta = $conexion->prepare( 'SELECT Nombre, clave FROM usuarios WHERE Nombre = ? AND clave = ?');

        $consulta->execute(array($user, $contraUsuario));

        $consultaArray=$consulta->fetchAll(PDO::FETCH_OBJ);
       
        if(count($consultaArray)!= 0) {
            
            
            session_start();
            
            $mensaje="Bienvenido $user";

            $_SESSION['usuario']=$user;

            header('Location: ./formValido.php');
            
            
            
        }else {
            
            $mensaje="Error, compruebe los datos introducidos";
        }
        
        
        
        
        
       
        
        
    }
} catch (Exception $e) {

    echo 'Error BD ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario Login</title>
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
                    <input type="password" name="contraseña" id="contra"placeholder="Introduzca la contraseña">
                    <input type="submit" name="enviar">
   
                    
                    
                     <p><?=$mensaje?></p>
                </form>
                
                
    
                
            </div>
        </div>
    </body>
</html>
