<?php 
require_once("../lib/connect.php");
$consulta = "SELECT * FROM materias";
$resultado = mysqli_query($connect, $consulta);
$array = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>material teibol</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id </th>
                <th>nombre</th>
                <th>materia</th>
                <th>licenciatura</th>
                <th>cuatrimestre</th>
                <th>estatus</th>
         
            </tr>
        </thead>
        <tbody>    
            <?php
                while ($fila = mysqli_fetch_array ($resultado)) {

            ?>
            <tr> 
                <td><?php echo $fila['ID'];?></td>
                <td><?php echo $fila['Nombre'];?></td>
                <td><?php echo $fila['Materia'];?></td>
                <td><?php echo $fila['Licenciatura'];?></td>
                <td><?php echo $fila['Cuatrimestre'];?></td>
                <td><?php echo $fila['Status'];?></td>
                
                
                
            </tr>        
            <?php
                    }
            ?> 
        </tbody>
    </table>
</body>
</html>