<!--conexion.php-->
<!--Autor : Enrique Ferre Carbonell-->
<?php
$hostname='localhost'; 
$database='sprint0_bd';// nombre de la base de datos
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);//la funcion creada para la conexion
if($conexion->connect_errno){
    echo "Ha habido un error en la conexion";
}
?>