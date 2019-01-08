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
        session_start();
        //cerrando sesion
        echo "<h1>Cerrando sesión</h1>";
        echo $_SESSION['sesionActiva'];
    
        session_destroy();
      
    
    ?>
</body>
</html>