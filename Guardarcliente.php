<?php
  include("conectar_bd.php");  
    conectar_bd();

$nombre = $_POST["nombre"];  
$apellido = $_POST["apellido"];  
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"]; 

$conexio = "INSERT INTO cliente (nombre,apellido,telefono, direccion) VALUES ('$nombre','$apellido','$telefono','$direccion')";  
mysql_query($conexio); 

header('location: nuevocliente.php');
?>
