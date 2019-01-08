<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Validación de formularios PHP</title>
	</head>
	<body>
		<h1>Validar formularios en PHP</h1>
		
		<?php
		    //Se comprueba que el campo error no se encuentre vacío
			if(isset($_GET['error'])){
				//Se recibe el arreglo y se deserializa
				$error = base64_decode($_GET['error']);
				$error = unserialize($error);
				
				
				if($error[0] == 'faltan_valores'){
					echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
				}else{
					unset($error[0]);
					echo '<h3 style="color:red"> Se encontraron los siguientes errores</h3>';
					echo '<ul>';
					foreach ($error as $key => $e) {
						echo '<li style="color:red">'.$e.'</li>';
					}
					echo '</ul>';
					
				}
				/*
				if($error == 'nombre'){
					echo '<strong style="color:red">Introduce bien el nombre</strong>';
				}
				
				if($error == 'apellidos'){
					echo '<strong style="color:red">Los apellidos no son correctos</strong>';
				}
				
				if($error == 'edad'){
					echo '<strong style="color:red">Introduce una edad correcta</strong>';
				}
				
				if($error == 'email'){
					echo '<strong style="color:red">El correo es erroneo</strong>';
				}
				
				if($error == 'password'){
					echo '<strong style="color:red">Introduce una contraseña de más de 5 letras</strong>';
				}
				*/
			}
		?>
		
		<form method="POST" action="procesar_formulario.php">
			<label for="nombre">Nombre</label><br/>
			<input type="text" name="nombre" ><br/>
			
			<label for="apellidos">Apellidos</label><br/>
			<input type="text" name="apellidos" ><br/>
			
			<label for="edad">Edad</label><br/>
			<input type="number" name="edad" ><br/>
			
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

