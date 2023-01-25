<?php
include_once './TablasPrueba.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Tabla</title>
    </head>

    <body>
        
        
        <table>

            <?php for ($i=0;$i<$filas;$i++):?>

            <tr>
                
                <?php for ($d=0;$d<$columnas;$d++):?>
            
                    <td><?=$i?>-<?=$d?></td>
            
                <?php endfor;?>
                
            </tr>

            <?php endfor;?>

        </table>
        
    </body>
</html>
