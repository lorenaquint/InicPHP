<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
    <style>
        fieldset{
            width:20%;
        }
    
    </style>
</head>
	<body>
		<h1>Formulario de Suscripción</h1>
		
		<?php
            //Se comprueba que el arreglo que contiene la lista de errores
            //no se encuentre vacío
			if(isset($_GET['error'])){
				//Se recibe el arreglo y se deserializa
				$error = base64_decode($_GET['error']);
				$error = unserialize($error);
                //Si el primer elemento corresponde a faltan valores
                //es decir si algún campo se encuentra vacío muestra el error
                //En caso contrario lista todos los errores que fueron enviados
                //a través de la url
				if($error[0] == 'faltan_valores'){
					echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
				}else{
                    //Se borrar el primer elemento del arreglo el cual tiene la palabra OK
                    unset($error[0]);
                    // Se procede a listar los errores a través de la etiqueta <ul>
					echo '<h3 style="color:red"> Se encontraron los siguientes errores</h3>';
					echo '<ul>';
					foreach ($error as $key => $e) {
						echo '<li style="color:red">'.$e.'</li>';
					}
					echo '</ul>';
					
				}
				
			}
		?>
		
		<form method="POST" action="validarFormulario.php">
            <fieldset>
                <legend>Datos Básicos</legend>
                <p>
                    <label for="nombre">Nombre</label>
                </p>
                <p>
                    <input type="text" name="nombre" >
                </p>
                <p>
                    <label for="apellidos">Apellidos</label>
                </p>
                <p>
			        <input type="text" name="apellidos" >
                </p>
                <p>
                    <label for="edad">Edad</label>
                </p>
                <p>
			    <input type="number" name="edad" >
                </p>

                
            </fieldset>
			
			
			
			
			
			
			
			<label for="email">Email</label><br/>
			<input type="text" name="email" ><br/>
			
			<label for="pass">Contraseña</label><br/>
			<input type="password" name="pass" ><br/>

			<label for="web">Web</label><br/>
			<input type="text" name="web" ><br/>

			
			
			<input type="submit" value="Enviar" />
		</form>
	</body>
</html>

