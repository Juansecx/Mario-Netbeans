<?php

    if(isset($_POST['enviar'])){
        
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        
        
        if($usuario=="" && $clave==""){
            $mensaje="Introduzca el usuario y la contraseña por favor";
            $estilo="red";
            
        }else if($usuario!="user01" && $clave!="iesm01"){
            
            $mensaje="Usuario inexistente";
            $estilo="red";
            
        }else if($usuario=="user01" && $clave==""){
            
            $mensaje="Introduzca la contraseña";
            $estilo="red";
            
        }else{
            
            $mensaje="Bienvenido ".$usuario;
            $estilo="green";
        }
        
        
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
    </head>
    <body>
         <header>
            <h1>Formulario Aunteticacion</h1>   
        </header>

        <main>

            <form action="<?php echo $_POST['PHP_SELF'] ?>" method="POST">

                <label>Nombre de Usuario: </label>
                <input type="text" name="usuario">
                
                <label>Contraseña: </label>
                <input type="text" name="clave">
                
                <input type="submit" name="enviar" value="Enviar">

            </form>
            

        </main>
        
        <p style="color:<?=$estilo?>"><?=$mensaje?></p>
        
    </body>
</html>
