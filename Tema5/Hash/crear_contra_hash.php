<?php

$cadena_conexion = 'mysql:dbname=Ejercicio3;host=127.0.0.1';
$usuario_conexion = 'juanse';
$clave_usuario = 'juanse19';


  try{
    $bd = new PDO($cadena_conexion, $usuario_conexion, $clave_usuario);
   
    $usuario = 'juansecx';
    $clave = password_hash('usuario1', PASSWORD_DEFAULT);
   
   $consulta = "INSERT INTO usuarios (usuario, password) VALUES('$usuario', '$clave')";
   
   $bd->query($consulta);
   
   echo 'El usuario fue añadido correctamente';
   
   
   
   
  } catch (Exception $e){
    echo "Se produjo un error: ". $e->getMessage();
  }

