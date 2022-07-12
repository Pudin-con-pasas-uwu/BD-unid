<?php 
$connect;
require_once("../lib/functions.php");
$users = get_all_maestros($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>master teibol</title>
</head>
<body>  
    <table>
        <thead>
            <tr>
                <th>Id </th>
                <th>nombre</th>
                <th>apellido</th>
                <th>telefono</th>
                <th>correo</th>
                <th>estatus</th>
         
            </tr>
        </thead>
        <tbody>    
            <?php
                while ($fila = mysqli_fetch_array ($users)) {

            ?>
            <tr> 
                <td><?php echo $fila['ID'];?></td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['apellido'];?></td>
                <td><?php echo $fila['telefono'];?></td>
                <td><?php echo $fila['correo'];?></td>
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