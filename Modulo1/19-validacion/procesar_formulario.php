<?php

$error[0] = 'faltan_valores';
if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && 
   !empty($_POST['edad']) && !empty($_POST['web']) && !empty($_POST['email']) && !empty($_POST['pass'])){
	$error[0] = 'ok';
	
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$edad = (int) $_POST['edad'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	// Validar el nombre
	if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
		$error[] = 'El nombre solamente debe contener caracteres alfanuméricos';
	}
	
	if(!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){
		$error[]= 'El apellido solamente debe contener caracteres alfanuméricos';
	}
	
	if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
		$error[]= 'La edad debe ser un número entero';
	}
	
	if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error[]= 'El formato de email es incorrecto';
	}
	
	if(empty($pass) || strlen($pass)<5){
		$error[] = 'El password debe ser superior a 5 caracteres';
	}
	if(empty($web) || filter_var($web, FILTER_VALIDATE_URL)){
		
		$error[] = 'La url no tiene el formato correcto';
	}
	
}else{
	$error[0] = 'faltan_valores';
	
}

// Se verifica que el primer elemento del arreglo no sea ok
//Y se serializa para poderlo pasar por la URL pero ocultando su contenido
echo var_dump($error)."<br>";

if(count($error)>=1){
	
	$error = serialize($error);
	$error = base64_encode($error);
	$error = urlencode($error);
//Redireccionamos a index.php enviando el arreglo de errores
	header("Location:index.php?error=".$error);
}





?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Validación de formularios PHP</title>
	</head>
	<body>
		<?=count($error)?>
		<?php if($error[0] == 'ok' && count($error)==1): ?>
		<h1>Datos validados correctamente</h1>
			<p><?=$nombre?></p>
			<p><?=$apellidos?></p>
			<p><?=$edad?></p>
			<p><?=$email?></p>
		<?php endif; ?>
	</body>
</html>