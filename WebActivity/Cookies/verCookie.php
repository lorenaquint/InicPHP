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
        if (isset($_COOKIE['miCookie'])) {
            echo "<h1>".$_COOKIE['miCookie']."</h1><br>";
            
        }else{
            echo "No existe la cookie";
        }
        if (isset($_COOKIE['miCookieYear'])) {
            
            echo "<h1>".$_COOKIE['miCookieYear']."</h1><br>";
        }else{
            echo "No existe la cookie";
        }
        
    ?>
    <a href="index.php">Crear Cookies</a>
    <br>
    <a href="borrarCookie.php">Borrar Cookies</a>
</body>
</html>