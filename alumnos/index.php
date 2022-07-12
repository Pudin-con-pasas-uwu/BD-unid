<?php 

$connect;
require_once("../lib/functions.php");
$users = get_all_alumnos($connect);
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
    <h1>datos de los alumnos <small><a href="Formulario.php">insertar</a></small></h1>
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
                while ($fila = mysqli_fetch_array ($users)) {

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
                <td><a href="detail.php?id=<?php echo $fila ['cumid']; ?>">detalle</a></td>
                <td><a href="formaup.php?id=<?php echo $fila ['cumid']; ?>">editar</a></td>
                <td><a href="delform.php?id=<?php echo $fila ['cumid']; ?>">eliminar</a></td>
            </tr>        
            <?php
                    }
            ?> 
        </tbody>
    </table>
</body>
</html> 