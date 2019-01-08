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
      unset($_COOKIE['miCookie']);
      //Pero necesitamos caducar la cookie
      setcookie('miCookie','',time()-100);
   }
   //Tan pronto la borra nos redirecciona
   header('Location:verCookie.php');
        

    ?>
</body>
</html>