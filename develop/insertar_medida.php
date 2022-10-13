<!--InsertarMeida.php-->
<!--Autor : Enrique Ferre Carbonell-->
<?php
//metodo creado para insertar una medida
include 'conexion.php';//incluimos el archivo de conexion
$valor =$_POST['valor'];//usamos el metodo post
$distancia =$_POST['distancia'];
$fecha =$_POST['fecha'];
$consulta = "INSERT INTO datos values('".$valor."','".$distancia."','".$fecha."')";// con la variable consulta introducimos los pots dentro de la tabla
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>