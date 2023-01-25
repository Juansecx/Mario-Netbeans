


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
        
        /*funcion que recibe un array de numeros con limites*/
        /*Devuelve el array rcortado*/
        
           function filtraVector($arrayEntrada,$max,$min){
               
               $index=0;
               
               $arrayFinal=[];
               
               while($index<count($arrayEntrada)){
                   
                   if($arrayEntrada[$index]>=$min && $arrayEntrada[$index]<=$max  ){
                       $arrayFinal[]=$arrayEntrada[$index];
                  
               }  
               

               $index++;
               }
           
               
               return $arrayFinal;
           }
           
           
           
           function imprimeArray($arrayEntrada){
               
               foreach ($arrayEntrada as $value){
                   echo $value;
               }
               
           }
        ?>
    </body>
</html>
