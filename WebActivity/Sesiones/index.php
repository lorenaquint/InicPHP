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
    //Iniciar sesión
     session_start();
     //Variable local
     $texto = "Estas son las sesiones";
     //Creamos una sesión con la variable global y le pasamos el nombre de un índice
     //Variable de sesión
     $_SESSION['sesionActiva']="Hola soy la sesión activa";
     echo $texto."<br>";
     echo $_SESSION['sesionActiva']."<br>";

    ?>
</body>
</html>