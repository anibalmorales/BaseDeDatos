<?php

include 'conexion.php';

$q=$_POST['q'];
$con=conexion();

$sql="select * from cliente where nombre LIKE '".$q."%'";
$res=mysql_query($sql,$con);

if(mysql_num_rows($res)==0){

 echo '<b>No hay sugerencias</b>';

}else{

echo '<b>Sugerencias:</b><br />';

while($fila=mysql_fetch_array($res)){
echo '<table cellpadding="0" cellspacing="0" width="100%">';
echo '<thead><tr><td>No.</td><td>NOMBRE</td><td>APELLIDO</td><td>DIRECCION</td><td>TELEFONO</td><td>HISTORIAL</td></tr></thead>';
 echo '<td>'.$fila['idcliente'].'</td>';
   		echo '<td>'.$fila['nombre'].'</td>';
   		echo '<td>'.$fila['apellido'].'</td>';
   		echo '<td>'.$fila['direccion'].'</td>';
   		echo '<td>'.$fila['telefono'].'</td>';
		echo '<td><a href="historialclinico.php?id='.$fila['idcliente'].'">ver</a></td></tr>';
			echo "</table>";

}

}

?>
