<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<?php
include("conexion.php");

//mysql_query(" INSERT INTO authors (id,name,email) VALUES('','$_POST[name]','$_POST[email]') ");
$query ="INSERT INTO authors (id,name,email) VALUES('','$_POST[name]','$_POST[email]') ";
mysql_query( $query ) or die("No se puede la alta ".mysql_error());

?>
<tr> Alta Exitosa!!</tr>
<br><tr><a href="altas.html">Realizar otra alta</a></tr></br>
<br><tr><a href="index.html">Regresar Menu Principal</a></tr></br>
</body>
</html>
