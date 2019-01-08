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
        //setcookie("nombre","Valor que solo puede ser texto","caducidad","ruta","dominio");
        //cookie básica
        setcookie("miCookie","Oreo");

        
        //cookie que dura uyn año, cuando pase un año  y al enviemos al server va a decir q 
        //ya a expirado
        setcookie("miCookieYear","OreoYear",time()+(60*60*24*365));
        header('Location:verCookie.php');

    ?>

</body>
</html>