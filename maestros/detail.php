<?php 
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_master($connect, $id);
$maetro = mysqli_fetch_array ($resultado);
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
<h1>detalles del maestro <?php echo $maetro['nombre'] ?> <small><a href="../maestros/">regresar</a></small></h1>
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
        
            <tr> 
            <td> <?php echo $maetro['ID'] ?> </td>
            <td> <?php echo $maetro['nombre'] ?> </td>
            <td> <?php echo $maetro['apellido'] ?> </td>
            <td> <?php echo $maetro['telefono'] ?> </td>
            <td> <?php echo $maetro['correo'] ?> </td>
            <td> <?php echo $maetro['Status'] ?> </td>
            </tr>        
           
        </tbody>
    </table>
</body>
</html>