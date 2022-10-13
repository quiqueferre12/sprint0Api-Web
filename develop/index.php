<!--index.php-->
<!--Autor : Enrique Ferre Carbonell-->
<?php
$inc = include('conexion.php');
?>

<!DOCTYPE html>
<html>
<title>
    Mostrar medidas
</title>
<body>
    <table align="center" border="1px" style="width:300px; line-height:30px"><!-- definimos una tabla para contener las medidas-->
        <tr> <!-- definimos una fila de celdas en una tabla-->
            <th colspan="3"><!-- Encabezado de la celda-->
                <h2>Listado de medidas</h2>
            </t>
                <tr><th>Valor</th><!-- Dentro de la fila anyadimos las cabezas de titulo de las tablas-->
                <th>Distancia</th>
                <th>Fecha</th>
            </t>
            <?php 
            if($inc){
                $consulta = "SELECT * FROM datos";
                $resultado = mysqli_query($conexion,$consulta);
                if($resultado){
                    while($row = $resultado ->fetch_array()){ // guardamos en las respectivas variables la información en índices asociativos utilizando los nombres de los campos 
                        $valor = $row['valor'];
                        $distancia = $row['distancia'];
                        $fecha = $row['fecha'];
                        ?> 
                        <tr>
                            <td><?php echo $valor ?></td> <!-- muestra cada variable en su respectiva fila -->
                            <td><?php echo $distancia ?></td> 
                            <td><?php echo $fecha ?></td> 
                        </tr>
                        <?php 
                    }
                    
                }
            }
            ?>   
        </tr>
    </table>
</body>
</html>