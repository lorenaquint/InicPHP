<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
  // Para definir un número de coma flotante se utiliza el punto
    $num = 3.1416;
    //conocer el tipo de una variable
    echo gettype($num);
    echo "<br>";
    //Variables  booleanas, cuando imprimimos una variable
    //booleana verdadera nos da 1 y la false no nos imprime
    //nada
    $verdadero = true;
    echo "Este es el valor de verdadero: ".$verdadero;
    echo "<br>";
    $falso = false;
    echo "Este es el valor de falso: ".$falso;
    echo "<br>";
    echo gettype($verdadero);
    echo "<br>";
    echo gettype($falso);
    //Varaibles nulas
    $nula = null;
    echo "<br>";
    echo gettype($nula);

 ?>
</body>
</html>