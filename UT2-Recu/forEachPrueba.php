
<?php


$arrayVariables=[['var'=>'var1'],['var'=>'var2']];

    


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bucle foreach</title>
    </head>
    <body>
        
        <table>
            
            
            <tr>
                <td>Variables</td>
                <td>Valor</td>
            </tr>
        
        <?php foreach ($arrayVariables as $value):?>
            
            <tr>
                
                <td><?=$value['var']?></td>
                
            </tr>
            
          <?php endforeach;?>
            
        </table>
        
    </body>
</html>
