<?php
	session_start();
	if(isset($_SESSION['USERCORE'])!=""){
		header('Location:principal.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta content="IE=edge,requiresActiveX=true" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="imagenes/logo.ico" />
<link href="css/Estilo.css" rel="stylesheet" type="text/css"/>	
<title>LOGIN</title>
<script>
	function login(){
		login.submit();
	}
</script>
</head>
<body style="background-image: url(imagenes/anibal.jpg);">
<center>
<!-- tabla login --->
<form name="login" method="post" action="Valida_Session.php">
<table width='350' border='0' class='ventanas' cellspacing='0' cellpadding='0'>
<tr>
	<td colspan='3' class='tabla_ventanas' height='10' colspan='3' align='center'>::: LOGIN ::: </td>
</tr>
<tr><td colspan=3><br/></td></tr>
<tr>
<td colspan='3'>
	<center>
	<table>
	<tr>
		<td><strong>Usuario:</strong></td>
		<td><input type="text" name="txtUser" class="CajaTexto" size="30" x-webkit-speech="true"/></td>
	</tr>
	<tr>
		<td><strong>Password:</strong></td>
		<td><input type="password" name="txtPassword" class="CajaTexto" size="30" x-webkit-speech="true"/></td>
	</tr>
	</table>
	</center>
</td>
</tr>
<tr>
<td colspan=3 align='center'><img src='imagenes/incio.jpg' width='250'></td>
</tr>
<tr>
<td height='50' colspan=3 align='center'><button class="clean-gray" onclick="login();"> LOGIN </button></td>
</tr>
</table>
</form>
</center>
</body>
</html>
