<?php
	session_start();
	if(!isset($_SESSION['valido']))
		$_SESSION['valido'] = 0;

?>
<!DOCTYPE html>     
<!-- El encabezado !DOCTYPE html especifica que se trata de un documento HTML5 -->
<html>
 <head>
  <link type="text/css" rel="stylesheet" href="estilo.css"> 
   <!-- La linea de arriba es para importar estilos CSS a nuestro formulario -->
  <title>Formulario de contacto</title>
 </head>
 <body>
<?php
		if($_SESSION['valido']==1)
		{ 
	?>

	<h1>REGISTRO DE NUEVO PACIENTE</h1>
  <section class="formulario">
 <form action="Guardarcliente.php" method="post">
<label for="nombre"></label>
 <input id="nombre" type="text" name="nombre" placeholder="Nombre" required="" /></br>
<label for="apellido"></label>
 <input id="apellido" type="text" name="apellido" placeholder="Apellido" required="" /></br>
<label for="telefono"></label>
 <input id="telefono" type="text" name="telefono" placeholder="Telefono" required="" /></br>
<label for="direccion"></label>
 <input id="direccion" type="text" name="direccion" placeholder="Direccion" required="" /></br>
 <input id="submit" type="submit" name="submit" value="Enviar" />
</form>
  </section>

<?php }
	else
		header('location: Login.php');
	?>
 </body>
</html>
