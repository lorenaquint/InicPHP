<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=<">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $myvar = "Este es primero programa en php";
    ?>
    <h1><?php echo $myvar;?></h1>
    
    <?php

$myvar2= nl2br("SEVILLA\n");
$Myvar2= nl2br("MADRID\n");
//Esto imprimiráSEVILLA
echo$myvar2;
//Esto imprimirá MADRID ECHO$Myvar;
echo$Myvar2;
    //Definir constante
      define("PI",3.1416);
      //Salto de línea nl2br
      echo nl2br((string)PI."\n");
      
      
    //Setencias de condición
    if(PI > 3) echo " \n Esta debe ser la constante PI";
    ?>
    
</body>
</html>