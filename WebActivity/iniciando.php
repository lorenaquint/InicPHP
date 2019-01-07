
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
      // ***************OPERADORES ARITMETICOS*****************//
      /* $a + $b Suma
         $a -$b Resta
         $a * $b Multiplicación
         $a / $b División
         $a % $b Módulo (resto de la división)
         $a++ Incremento
         $a--Decremento
      */

      //*******************OPERADORES DE CADENA *************************//
      echo "<h1>OPERADORES DE CADENA</h1>";
      $a ="Hola";
      // Ahora $b contiene "HolaMundo"
      $b = $a." Mundo <br>";
      echo $b;
       //Interpretación de comillas
      $a ="Mundo";
      echo 'Hola $a <br>'; 
      //esto escribirá “Hola Mundo”
      echo "Hola $a"; 
      
    //**********************OPERADORES DE COMPARACION*********************//
    /*
            $a < $b $a menor que $b.
            $a > $b $a mayor que $b.
            $a <= $b $a menor o igual que $b.
            $a >= $b $a mayor o igual que $b.
            $a == $b $a igual que $b.
            $a != $b $a distinto que $b
     */

     //*******************OPERADORES LOGICOS************************* //
     /*
           $a AND $b Verdadero si ambos verdadero.
           $a && $b Verdadero si ambos verdadero.
           $a OR $b Verdadero si por lo menos uno de los dos es verdadero.
           $a !! $b Verdadero si por lo menos uno de los dos es verdadero.
           $a XOR $b Verdadero si sólo uno de los dos es verdadero.
           !$a Verdadero si $a es falso y recíprocamente.     
     */



     /**************************OPERADORES DE <ASIGNACION>*****************
      * 
            $a = $bAsigna a $a el contenido de $b
            $a += $b Le suma $b a $a y le asigna el resultado a $a
            $a -= $bLe resta $b a $a y le asigna el resultado a $a
            $a *= $bMultiplica $a por $b y lo asigna a $a
            $a /= $b Divide $a por $b y lo asigna a $a
            $a .= $b Añade la cadena $b a la cadena $a
         
     */

     //****************SENTENCIAS DE DECISIÓN+++++++++++++++++++++++++++++ */
     echo "<h1>SENTENCIAS DE DECISIÓN</h1>";
     $nombre = "Lorena";
        echo "<br>";
        if($nombre == "")
        {
            echo "Tú no tienesnombre";
        } elseif(($nombre=="eva") OR ($nombre=="Eva")) 
            { 
                echo "Tu nombre esEVA";
            }  
            else
            { 
            echo "Tu nombre es " .$nombre;
            }
        
     //*********************SENTENCIA SWITCH********************************** */
     echo "<h1>SENTENCIAS SWITCH</h1>";
     echo "<br>";
      $dia = "domingo";
     switch($dia) {
        case "Lunes":
            echo "Hoy es Lunes";
            break;
        case "Martes":
            echo "Hoy es Martes";
            break;
        case "Miercoles":
            echo "Hoy es Miercoles";
            break;
        case "Jueves":
            echo "Hoy es Jueves";
            break;
        case "Viernes":
            echo "Hoy es Viernes";
            break;
        default:
            echo "Seguramente sea fin de semana";
     }

     //**********SENTENCIA  WHILE  ***********//
     echo "<h1>SENTENCIAS WHILE</h1>";
     echo "<br>";
        $num= 1;
        while($num< 5) 
        {
                echo $num."<br>";
                if($num== 3)
                    {
                        echo "Aquí nos salimos \n";
                        break;
                    }
                $num++;
        }

    //**********SENTENCIA  DOWHILE  ***********//
    echo "<h1>SENTENCIAS DO WHILE</h1>";
        $num= 6;
        echo "<br>";
        do {
            echo $num."<br>";
            if($num== 3)
            {
                echo "Aquí nos salimos \n";
                break;
            }
            $num++;
            }while($num< 5);

    //**********SENTENCIA  FOR  ***********//
    echo "<h1>SENTENCIAS FOR</h1>";
    for ($i=0; $i <= 5; $i++) { 
        echo $i."<br>";
        if ($i==4) {
            echo "Es hora de irnos";
            break;
        }
    }

    //********** ARREGLOS  ***********//
    echo "<h1>ARREGLOS</h1>";
    echo "<br>";
    $num= 6;
    $ciudad[] ="París";
    $ciudad[] ="París";
    $ciudad[] ="Roma";
    $ciudad[] ="Sevilla";
    $ciudad[] ="Londres";
    print("yo vivo en " . $ciudad[2] ."<BR>\n");
    echo "<br>";

    $ciudad = array("París", "Roma", "Sevilla","Londres");
    //contamos el número de elementos de latabla
    $numelentos=count($ciudad);
    //imprimimos todos los elementos de la tabla
    for($i=0; $i < $numelentos;$i++)
    {
        print("La ciudad $i es $ciudad[$i]<BR>");
    }
    /**
     * Sino se especifica, el primer índice es el cero, pero podemos utilizar el operador => para especificar el índice inicial.
        $ciudad = array(1=>"París", "Roma", "Sevilla", "Londres");
     * 
     * 
     */

     //***************ARREGLOS ASOCIATIVOS++++++++++++++++++++++ */
     echo "<h1>ARREGLOS ASOCIATIVOS</h1>";

    $visitas[0] =200;
    $visitas[1] =186;
    //si usamos las tablas asociativassería
    $visitas["lunes"] =200;
    $visitas["martes"] =186;
    //OTRA FORMA
    $visitas = array("lunes"=>200, "martes"=>700);
    echo $visitas["lunes"];
    echo "<br>";
    echo $visitas["martes"];
    echo "<br>";
    //***PUNTEROS EN ARRAYS ASOCIATIVOS************** */

    /**
     * current-devuelve el valor del elemento que indica el puntero
     * pos -realiza la misma función que current
     * reset-mueve el puntero al primer elemento de la tabla
     * end-mueve el puntero al último elemento de la tabla
     * next-mueve el puntero al elemento siguiente
     * prev-mueve el puntero al elemento anterior
     * count-devuelve el número de elementos de una tabla
     * 
     */
    echo "<h1>PUNTEROS EN ARRAYS ASOCIATIVOS</h1>";
    $visitas = array("lunes"=>400, 
                      "martes"=>700,"miercoles"=>800, "jueves"=>1200,"viernes"=>900, "sábado"=>300,"domingo"=>200) ;
    echo "Estos son los elementos del array <br>";
   //Imprimir un array asociativo
    for ($i=0; $i < count($visitas); $i++) 
                {   
                    echo current($visitas)."<br>";
                    next($visitas);
                    
                }
    echo "Current ".current($visitas)."<br>"; 
    echo "End ".end($visitas)."<br>"; 
    
    echo "Current ".current($visitas)."<br>"; 
    echo "End ".end($visitas)."<br>"; 
    echo "Prev ".prev($visitas)."<br>"; 
    echo "Reset ".reset($visitas)."<br>"; 


    /***RECORRER CON EACH************** 
     * La función list() es más bien un operador de asignación, 
     * lo que hace es asignar valores a unas lista de variables
     * La función each() devuelve el valor del elemento actual,en este caso,
     * el valor del elemento actual y su clave,y desplaza el puntero al siguiente,
     * cuando llega al final devuelve FALSO,y termina el bucle while()
    */
    echo "<h1>RECORRER ARRAYS ASOCIATIVOS CON EACH()</h1>";
    while (list($clave,$valor) = each($visitas)) {
        echo " El día ".$clave." el sitio registro ".$valor." visitas <br>";
       
    }

     //**************ARREGLOS MULTIDIMENSIONALES************** //
    $calendario = array(
                array(1, "Enero",31),
                array(2, "Febrero",28),
                array(3, "Marzo",31),
                array(4, "Abril",30),
                array(5, "Mayo",31)
    );
    echo "<h1>ARREGLOS MULTIDIEMNSIONALES</h1>";
    while(list($clave, $valor ) =each($calendario))
        {
        $cadena =$valor[1];
        $cadena .= " es el mes número " .$valor[0];
        $cadena .= " y tiene " . $valor[2] . " días<BR>"; 
        echo$cadena;
        }


    //**********************FUNCIONES******************************//
    
    //********************La instrucción RETURN******************//
    
       /*Existe una manera de terminar la ejecución de la función aunque
       aún haya código por ejecutar,mediante el uso de la instrucción
       return terminamos la ejecución del código de una función y devolvemos
       un valor.
       */
      echo "<h1>FUNCIONES</h1>";
       function mayor($x,$y)
        {
            if($x > $y)
            {
                return $x." es mayor que ".$y;
            } else
            {
                return $y." es mayor que ".$x;
            }
        }
        function mayor2($x,$y)
        {

            $msg = "";
            if($x > $y)
                {
                    $msg = $x." es mayor que ".$y;
                } else
                {
                    $msg = $y." es mayor que ".$x;
                }
                return msg;
        }
        echo mayor(3,4)."<br>";
        echo mayor(3678,4909);
        
       
            

        echo "<h1>FUNCIONES CON PARAMETOS POR REFERENCIA Y POR VALOR</h1>";
        function suma ($x, $y)
            {
                $x = $x + 1;
                return $x+$y;
            }
            function sumaRef(&$x, $y)
            {
                $x = $x + 1;
                return $x+$y;
            }
            $a = 1;
            $b = 2;
            //parámetros por valor
            echo "El resultado de la suma por valor es: ".suma($a,$b)."<br>"; // imprimirá 4
            echo "Este es el valor de a cuando se pasa por valor ".$a."<br>"; // imprimirá 1
            //parámetros por referencia
            echo "El resultado de la suma por valor es: ".sumaRef($a,$b)."<br>"; // imprimirá 4
            echo "Este es el valor de a cuando se pasa por referencia ".$a."<br>"; //imprimirá 2


        echo "<h1>FUNCIONES CON PARAMETOS OPCIONALES</h1>";
            function suma2($x, $y = 1)
                {
                    $y = $y + 1;
                    return $x+$y;
                }
                $a = 8;
                $b = 2;
                //parámetros por valor
                echo "El resultado de la suma cuando no pasamos el valor de Y ".suma2($a)."<br>"; // imprimirá 10
                echo "El resultado de la suma cuando pasamos el valor de Y ".suma2($a,$b)."<br>"; // imprimirá 11
        echo "<h1>FUNCIONES CON VARIABLES ESTÁTICAS STATIC</h1>";
        /*
           Las variables estáticas se definen dentro de una función,la primera 
           vez que es llamada dicha función la variable se inicializa,guardandos
           un valor para posteriores llamadas
        
        */
        function contador ()
            {
                static $count= 0;
                $count= $count+ 1;
                return $count;
            }
            echo contador()."<BR>"; // imprimirá 1 
            echo contador()."<BR>"; // imprimirá 2 
            echo contador()."<BR>"; // imprimirá 3

            echo "<h1>FUNCIONES CON VARIABLES GLOBALES GLOBAL</h1>";

        /*
             Las variables globales no se pueden declarar dentro de una función,lo que hacemos
             el llamar a una variable que ya ha sido declarada,tomando el valor que tenga en ese momento,
             pudiendose modificado en la función.
        
        */
        $z = 10;
       
        function ver_a()
        {
            global $z;
            echo $z."<BR>"; // imprimirá el valor de $a
            $z += 1; // sumamos 1 a $a
        }
        echo ver_a(); // imprimirá 10
        echo ver_a(); //imprimirá 11
        $z = 7;
        echo ver_a(); // imprimirá 7
        echo ver_a(); // imprimirá 8

                    
     ?>



</body>
</html>