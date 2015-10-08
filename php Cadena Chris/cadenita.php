<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadenita</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form>
        <center>
         <?php 
            $cadena=$_POST['texto'];
            if(strlen($cadena)>140)
                echo '<p>Te pasaste por '.(strlen($cadena)-140).' caracteres.</p><br>';
        ?>
        <p style="font-size:1em;">
            <?php
                if(strlen($cadena)>140)
                    for($i=0; $i<140; $i++)
                        echo ''.$cadena[$i];
                else
                    for($i=0; $i<strlen($cadena); $i++)
                        echo ''.$cadena[$i];
            ?>
         </p>
         </center>
     </form>
</body>
</html>