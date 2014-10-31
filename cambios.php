<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

  <form action="cambio.php" method="post">    
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

 while($columna = mysql_fetch_array($resultado))
 {
   $id= $columna['id'];

  if($_GET['editar']==true && $id==$_GET['id'])
  { 
   echo '<tr>';
   echo '<td><input type="text" name="nombre" id="nombre" value="'.$columna['name'].'"/></td>';
   echo '<td><input type="text" name="correo" id="correo" value="'.$columna['email'].'"/></td>';
   echo '<td><input type="submit" value="Aseptar"/></td>';
   echo '<td><input type="hidden" name="id" value="'.$id.'"/></td>';
   echo '<td><a href="cambios.php">Canselar</a></td>';
   echo '</tr>';
  }
  else
  { echo '<tr>';
    echo '<td width="42%">'.$columna['name'].'</td>';
    echo '<td width="42%">'.$columna['email'].'</td>'; 
    echo '<td><a href="cambios.php?editar=true&id='.$id.'"> Editar</a></td>';
    echo '</tr>';
   }
}
?> 
</table>
</form>
<br><tr><a href="index.html">Regresar Menu Principal</a></tr></br>
</body>
</html>
