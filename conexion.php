<?php
//Conexion con mysql.
$dbhost="localhost";
$dbuser="root";
$dbpass="amor"; //el password se encuentra en blanco, ingresar su password de su cuenta de mysql.
$dbname="books"; //nombre de la base de datos
$tabla="authors";  // nombre de la tabla
$link = mysql_connect($dbhost,$dbuser,$dbpass); //se hace la conexión con mysql 	
if(!link)
{
  echo "Error al conectar al servidor";
  echo mysql_error();	
}
$db = mysql_select_db($dbname,$link); //se selecciona la base de datos
if(!db)
{
  echo "Error al seleccionar la base de datos";
  echo mysql_error();	
}



/*$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " . mysql_error()); mysql_select_db($dbname) or die("Error al conectar a la base de datos.");
*/
?>
