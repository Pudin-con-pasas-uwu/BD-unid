<?php 
$connect;
require_once("../lib/functions.php");
$users = get_all_materias($connect);
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
<h1>datos de las materias <small><a href="Formulario.php">insertar</a></small></h1>
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
                while ($fila = mysqli_fetch_array ($users)) {

            ?>
            <tr> 
                <td><?php echo $fila['ID'];?></td>
                <td><?php echo $fila['Nombre'];?></td>
                <td><?php echo $fila['Materia'];?></td>
                <td><?php echo $fila['Licenciatura'];?></td>
                <td><?php echo $fila['Cuatrimestre'];?></td>
                <td><?php echo $fila['Status'];?></td>
                <td><a href="detail.php?id=<?php echo $fila ['ID']; ?>">detalle</a></td>
                <td><a href="#">editar</a></td>
                <td><a href="#">eliminar</a></td>
                
                
            </tr>        
            <?php
                    }
            ?> 
        </tbody>
    </table>
</body>
</html>