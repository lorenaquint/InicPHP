<?php
    
    if(isset($_POST['titulo']) && isset($_POST['descripcion']))
    {
        echo "<h2>Título</h2>".$_POST['titulo']."</h2>";
        echo "<h2>Descripción</h2>".$_POST['descripcion']."</h2>";
    }
    else{
        echo "<h2>Los campos del formulario no existen</h2>";
    }

?>