
<?php
$idioma = "esp";

if (isset($_POST["enviar"])) {


    $idioma = $_POST['idiom'];

    setcookie('idiom', $idioma, time() + 3600 * 24);
    
} else {

    if (isset($_COOKIE['idiom'])) {

        $idioma = $_COOKIE['idiom'];
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba Juego</title>
    </head>
    <body>

        <h1>SELECCIONA EL IDIOMA  QUE QUIERE MOSTRAR EN LA WEB</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

            <select name="idiom">

                <?php if(isset($idioma) && $idioma =="esp"):?>
                
                <option value="esp" selected>Español</option>
                <option value="ing">Inglés</option>
                
                <?php elseif(isset($idioma) && $idioma =="ing"):?>
                
                <option value="esp">Español</option>
                <option value="ing" selected>Inglés</option>
                
               <?php endif;?>
                
                 <input type="submit" value="Enviar" name="enviar">
            
                  
            </select>

           


        </form>

        <?php if ($idioma =="ing"): ?>
        
        <h1>Title</h1>
        <?php elseif($idioma =="esp"):?>

        <h1>Titulo</h1>
        
        <?php endif ?>
    </body>

</html>
