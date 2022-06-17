<?php 
require_once("../lib/connect.php");
$consulta = "SELECT * FROM alumnos";
$resultado = mysqli_query($connect, $consulta);
$array = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumnos teibol</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID </th>
                <th>nombre</th>
                <th>apellido</th>
                <th>telefono</th>
                <th>correo</th>
                <th>licenciatura</th>
                <th>cuatrimestre</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>    
            <?php
                while ($fila = mysqli_fetch_array ($resultado)) {

            ?>
            <tr> 
                <td><?php echo $fila['cumid'];?></td>
                <td><?php echo $fila['Cumbre'];?></td>
                <td><?php echo $fila['CUMellido'];?></td>
                <td><?php echo $fila['CUMofono'];?></td>
                <td><?php echo $fila['correo'];?></td>
                <td><?php echo $fila['licenciatura'];?></td>
                <td><?php echo $fila['cuatrimestre'];?></td>
                <td><?php echo $fila['status'];?></td>
            </tr>        
            <?php
                    }
            ?> 
        </tbody>
    </table>
</body>
</html>