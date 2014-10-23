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
 
<h1>Historial Clinico de Pacientes</h1>
<?php }
	else
		header('location: Login.php');
	?>
 </body>
</html>
