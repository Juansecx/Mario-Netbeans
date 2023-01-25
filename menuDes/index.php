
<?php


/*Array de colores con su codigo asociado*/

//Definimos las variables

$codColor='black';

$arrayColores = ['rojo'=> '#ff0000','amarillo'=>'#ffff00', 'azul'=>'#00fff3','naranja'=>'#ff9800','plata'=>'#a4c0cb'];

//Capturo la info del formulario

if (isset($_POST['enviar']) ){
    
    echo 'LLegamos!';
    
    $codColor=$_POST['color'];
    
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor=<?=$codColor?>>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            
            <select name='color'>
            
               <?php foreach($arrayColores as $nombreColor=>$codHex): ?>
                    
                   <?php  if($codHex==$codColor): ?>
                       
                        <option selected value=<?=$codHex?>><?=$nombreColor?></option>
                     
                      <?php else: ?>
                    
                            <option value=<?=$codHex?>><?=$nombreColor?></option>
                         
                  <?php  endif;  ?>
     
               <?php endforeach;?>
               <input type= submit value='enviar' name='enviar'/>
            </select>
        </form>
        
        <?= $codColor ?>
    
    </body>
</html>
