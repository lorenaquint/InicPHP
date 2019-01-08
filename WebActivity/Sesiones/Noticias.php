<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
</head>
<body>
    <?php
        //Iniciamos la sesión
        session_start();
        echo $_SESSION['sesionActiva'];
    
    ?>
</body>
</html>