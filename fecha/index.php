<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        
   
       $fechaActual= date('N-d-m-Y');
       
    
       
       if(date('N')==4 && date('d')==20 && date('m')==10 && date('Y')==2022){
           
           echo 'Jueves, '.date('d').' de Octubre de ' .date('Y');
       }else{
           echo 'No se encuentra la fecha o no coincide con la actual';
       }
       
     
        
        ?>
    </body>
</html>
