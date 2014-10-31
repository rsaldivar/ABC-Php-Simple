<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<?php
include("conexion.php");

 $query =" DELETE FROM authors WHERE id='".$_POST['id']."'";
 mysql_query($query)or die("No se puede dar de baja ".mysql_error());
    
?>
<br><tr><a href="bajas.php">Realizar otra baja</a></tr></br>
<br><tr><a href="index.html">Regresar Menu Principal</a></tr></br>
</body>
</html>
