<?php
	session_start();
	if(!isset($_SESSION['valido']))
		$_SESSION['valido'] = 0;

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	
	<?php
		if($_SESSION['valido']==1)
		{ 
	?>
	<h2>PAGINA PRINCIPAL PROYECTO DE BASE DE DATOSs</h2>
	
	<?php }
	else
		header('location: Login.php');
	?>
</body>
</html>
