

<?php

$validar=false;
$mensaje="Por favor Introduzca los datos";
$nombre="Juan";
$contra="1234";

$colorEstilo="blue";



if (isset($_POST['enviar']) ){
    
    $mensaje;
    
    $nombre=$_POST['name'];
    $contra=$_POST['contraseña'];
    
    if($nombre=="" || $nombre==" ") {
   
    $colorEstilo="red";
    
    $mensaje="No se pudo acceder al perfil, introduzca el nombre";

    
    }elseif($contra=="" || $contra==" "){
    
    $colorEstilo="red";
      
    $mensaje="No se pudo acceder al perfil, introduzca el la contraseña";

    
    }
        if($_POST['name']==$nombre && $_POST['contraseña']!=$contra) {
    
        $colorEstilo="red";
        $mensaje="Usuario incorrecto";
    
    }elseif($_POST['name']!=$nombre && $_POST['contraseña']==$contra) {
        
        $colorEstilo="red";
        $mensaje="Usuario incorrecto";
        
    }elseif($_POST['name']==$nombre && $_POST['contraseña']==$contra) {
        
        $colorEstilo;
        $mensaje="Entrando en el perfil de " .$nombre;
        
    }elseif($_POST['name']!=$nombre && $_POST['contraseña']!=$contra){
        
        $colorEstilo="red";
        
        $mensaje="Error";
                
    }
    
}
    
    

    
    
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            
            
            .red {
                
                color:red;
                
            }
            
            
            .blue{
                
                color:blue;
                
            }
            
            
        </style>
        
        
    </head>
    <body bgcolor="pink">
        
        <form action="" method="post">
       
            <label for="name">Nombre: </label>
            <input type="text" name="name" style="border-color: orange"/>
            <br/>
            <br/>
            <label for="contra">Contraseña: </label>
            <input type="password" name="contraseña" style="border-color: orange"/>

                <br/>
                <br/>
                
            <input type="submit" name="enviar">
        
        </form>
        
        
        <p class="<?=$colorEstilo?>"><?=$mensaje?></p>
        
    </body>
</html>
