<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<form action="baja.php" method="post"> 
   <table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
   <tr>
   <td><b>Nombre</b></td>
   <td><b>Correo</b></td>
   <td><b>Opcion</b></td>
   </tr>

<?php
 
 include("conexion.php");

 $query ="SELECT * FROM authors";
 $resultado = mysql_query( $query ) or die("No se puede ejecutar la consulta: ".mysql_error());


 //MOSTRAMOS LA INFORMACION DE LOS CAMPOS, y la guardamos en un array
 while($columna = mysql_fetch_array($resultado))
 {
   $id= $columna['id'];

   if($_GET['borrar']==true ){
 	$query =" DELETE FROM authors WHERE id='".$_GET['id']."'";
	mysql_query($query)or die("No se puede dar de baja ".mysql_error());
	echo '<a href="bajas.php"> ACTUALIZAR TABLA </a>';
   }
    echo '<tr>';
    echo '<td width="42%">'.$columna['name'].'</td>';
    echo '<td width="42%">'.$columna['email'].'</td>'; 
    echo '<td><a href="bajas.php?borrar=true&id='.$id.'"> Baja</a></td>';
    echo '<td><input type="submit" name="eliminar" id="sumbit" value="eliminar" ></td>';
    echo '<td><input type="hidden" name="id" value="'.$id.'"/></td>';
    echo '</tr>';
  
}
?> 
</table>
<br><tr><a href="index.html">Regresar Menu Principal</a></tr></br>
</form>
</body>
</html>
