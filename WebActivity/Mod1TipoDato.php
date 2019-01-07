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
    //Las variable sno pueden iniciar con un número pero pueden
    //contenerlo, no contener signos de operadores ni - pueden 
    //contener guión bajo, no s epuede ponder ñ
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
    //Debugear una variable, contenido de la variable tipo, longitud
    echo "<br>";
    var_dump($num);
    $paises[] = array("Noruega","Finalandia","Croacia","Grecia");
    echo "<br>";
    var_dump($paises);
    echo "<br>";
    //Si queremos visualizar el valor de una variable lo podemos hacer 
    //colocándola dentro de las comillas dobles
    echo "Este es el valor de PI $num";
    echo "<br>";
    //Cuando colocamos las comillas senciallas nos imprime todo como
    //una cadena
    echo 'Este es el valor de PI $num';
    echo "<br>";
    //Siq quisieramos verla tendiramos q concatenasr asi, las comillas
    //dobles es un poco más lenta que la comilla simple el navegadro no conoce
    // el \n solo sirve para la consola
    echo 'Este es el valor de PI '. $num;
    echo "<br>";

    //***Constantes**************** */
    define('valMax',23);
    //Para visualizar una constante se hace sin el sino dolar
    echo "<h1> ".valMax; "</h1>";
    //*****CONSTANTES PREDEFINIDAS */
    //Version SO
    echo PHP_OS;
    echo "<br>";
    //Versión PHP
    echo PHP_VERSION;
    echo "<br>";
    //Directoria PHP
    echo PHP_EXTENSION_DIR;
    //Linea en la que estoy ubicada
    echo "<br>";
    echo __LINE__;
 ?>
</body>
</html>