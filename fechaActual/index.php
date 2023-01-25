<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fecha Actual</title>
    </head>
    <body>
      
        <?php
        
        $fecha= date('N-d-m-Y');
        
        $diaSemana=date("l");
        $diaMes=date("d",);
        $mes=date("m");
        $anio=date("y");
        
        //$arraySemana = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
        
        $arrayMeses= ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
        
        
        
        $arrayClave =[
            
            'Monday' => 'Lunes',
            'Tuesday' => 'Martes',
            'Wednesday' => 'Miercoles',
            'Thursday' => 'Jueves',
            'Friday' => 'Viernes',
            'Saturday' => 'Sabado',
            'Sunday' => 'Domingo'

            
        ];
        
            
        $mensaje=$arrayClave[$diaSemana]. ", ";
       
        $mensaje.=$diaMes ." de ";
    
        $mensaje.=$arrayMeses[$mes-1] ." de ";
        
        $mensaje.= date('Y');
        
        
     
        ?>
        
        <table border="1" style="border-collapse: collapse">
            
            <tr>
                
                <td bgcolor="grey"><?=$mensaje?></td>
                
            </tr>
            
        </table>
        
        
    </body>
</html>
