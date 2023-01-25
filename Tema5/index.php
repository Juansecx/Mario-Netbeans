<?php

include './BD.php';

$claseBD = new BD();

$mensaje='';

if(!isset($_SESSION['user'])){
    
    $mensaje="No has inciado sesion. Inicie sesion primero";
    
}

if(isset($_POST['enviar'])) {
 
    $nombre_usuario = $_POST['usuario'];
    $clave_usuario = $_POST['clave'];
    
    
  $cliente_verify = $claseBD->verificaCliente($nombre_usuario, $clave_usuario);
  
  if($cliente_verify){
      
      session_start();
      
      $_SESSION['user']=$nombre_usuario;
      
      header('Location: ./lista_familia.php');
      
  }else {
      
      $mensaje="No se puede encontrar el usuario";
  }
    
   
   
    

}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda</title>
    </head>
    <body>

        <div class="container">

            <div class="header">

                <h1>FORMULARIO DE LOGIN</h1>
            </div>
            
            <div class="formulario">
                
                <p><?=$mensaje?></p>

                <form action="<?php echo $_POST['PHP_SELF'] ?>" method="POST">
                    <label>Usuario</label>
                    <input type="text" name="usuario" id="nombre" placeholder="Introduzca el usuario">

                    <label>Contraseña</label>
                    <input type="password" name="clave" id="contra" placeholder="Introduzca la contraseña">
                    <input type="submit" name="enviar">
                    
                </form>




            </div>
        </div>

    </body>
</html>
