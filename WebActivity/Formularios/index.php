<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>
<body>
<legend>Formulario de contacto</legend>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset >
        
           <legend>Datos Básicos</legend>
            <p>
                <label for="nombre" class="col-sm-2"  >Nombre</label>
                <!-- minlength="3" minima longitud exigida-->
                <input type="text" name="nombre" minlength="3" >
            </p>
            <p>
                <label for="apellido" class="col-sm-2">Apellido</label>
                 <!-- maxlength="3" máxima longitud exigida
                 autofocus = es el foco al cargar el formulario
                 pattern="[A-Z]+" = expresion regular solo acepta mayúscula un número infinito de veces
                 pattern="[A-Z ]+"  acepta además el espacio
                 require="requerido", placeholder, value para un valor fijo
                 -->
                <input type="text" name="apellido" autofocus="autofocus" maxlength="5" pattern="[A-Z ]+" require="require" placeholder="Ingresa tu apellido">
            </p> 
            
            <p>
                <input type="button" value="Generar">
            </p> 
            <label for="sexo">Sexo</label>
            <p>
                Hombre <input type="checkbox" name="sexo" value="hombre">
                Mujer <input type="checkbox" name="sexo" value="muejer" checked>
            </p>
            <p>
                <label for="color">Color</label>  
                <input type="color" name="color" id=""> 
            </p>
            <p>
                <label for="fecha">Fecha</label>  
                <input type="date" name="fecha" id=""> 
            </p>
            <p>
                <label for="correo">email</label>  
                <input type="email" name="correo" id=""> 
            </p>
            <p>
                <label for="fichero">Archivo</label>  
                 <!-- multiple="se pueden subir muchos archivos-->
                <input type="file" name="fichero" multiple="multiple"> 
            </p>
            <p>
                <label for="oculto">Campo oculto</label>  
                <input type="hidden" name="oculto"> 
            </p>
            <p>
                <label for="cantidad">Cantidad</label>  
                <input type="number" name="cantidad"> 
            </p>
            <p>
                <label for="pass">Contraseña</label>  
                <input type="password" name="pass"> 
            </p>
            <label for="pass">Newsletter</label>  
            <p>
                
                Semanal <input type="radio" name="news" value="Semanal">
                Semestral <input type="radio" name="news" value="Semestral">
                Anual <input type="radio" name="news" value="Anual">
            </p>
            <p>
                <label for="web">Sitio Web</label>  
                <input type="url" name="web"> 
            </p>
            <p>
                <label for="comentarios">Comentarios</label>  
                <textarea name="comentarios" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="pel">Peliculas</label>  
                <select name="peliculas">
                    <option value="spiderman">Spiderman</option>
                    <option value="ironman">Iron man</option>
                    <option value="advengers">Advengers</option>
                    <option value="infinity">Infinity</option>
                </select>
            </p>
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>