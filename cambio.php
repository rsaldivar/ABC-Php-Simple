<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<?php
include("conexion.php");

$query ="UPDATE authors SET id='$_POST[id]',name='$_POST[nombre]' , email='$_POST[correo]' WHERE id='$_POST[id]'";
mysql_query( $query ) or die("No se puede el cambio ".mysql_error());

?>
<br><tr>Modificacion Exitosa!</tr></br>
<br><tr><a href="cambios.php">Hacer otra modificacion</a></tr></br>
<br><tr><a href="index.html">Regresar Menu Principal</a></tr></br>


</body>
</html>
