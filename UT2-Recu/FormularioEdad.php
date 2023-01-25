
<?php



$mensaje="Introduzca el usuario y la edad";

if(isset($_POST['enviar'])){
    
    
    $edad=$_POST['edad'];
    $nombreUsuario=$_POST['usuario'];
    
    if($edad<10) {
        
        $mensaje= $nombreUsuario. " eres muy joven";
        $estilo="red";
        
    }else if($edad>=10 && $edad<=20){
        
        $mensaje= $nombreUsuario. " que mala edad tienes!";
        $estilo="red";
        
    }else if($edad>20 && $edad<=30){
        
        $mensaje= $nombreUsuario. " estas en el mejor monmento!";
        $estilo="red";
        
    }else if($edad>30){
        
        $mensaje= $nombreUsuario. " que bien te veo!";
        $estilo="green";
        
    }
    
    
}


?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario Edad</title>
    </head>
    <body>

        <header>
            <h1>Formulario Edad</h1>   
        </header>

        <main>

            <form action="<?php echo $_POST['PHP_SELF'] ?>" method="POST">

                <label>Nombre de Usuario: </label>
                <input type="text" name="usuario">
                
                <label>Edad: </label>
                <input type="text" name="edad">
                
                <input type="submit" name="enviar" value="Enviar">

            </form>
            

        </main>
        
        <p style="color:<?=$estilo?>"><?=$mensaje?></p>

    </body>
</html>
