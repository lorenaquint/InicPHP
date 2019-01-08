<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php  
    //******VARIABLES SUPERGLOBBALES******** */
    /*Variables que están dispnibles en todo el ámbito del script en PHP */ 
    /**************VARIABLES DEL SERVIDOR********************/
    echo '<h1>';
    echo $_SERVER['SERVER_ADDR'];
    echo '</h1>';
    echo '<h1>';
    echo $_SERVER['SERVER_NAME'];
    echo '</h1>';
    echo '<h1>';
    echo $_SERVER['SERVER_SOFTWARE'];
    echo '</h1>';
    echo '<h1>';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '</h1>';
    echo '<h1>';
    echo $_SERVER['REMOTE_ADDR'];
    echo '</h1>';

    /*****************FORMULARIO************** */

   

?>


<form method="POST" action="recibir.php">
<p>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="">
</p>
<p>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="">
</p>
<p>
    <input type="submit" value="Enviar">
</p>

</form>
</body>
</html>