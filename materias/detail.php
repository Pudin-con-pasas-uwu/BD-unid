<?php 
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_materia($connect, $id);
$matelia = mysqli_fetch_array ($resultado);
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
<h1>detalles de la materia <?php echo $matelia['Nombre'] ?> <small><a href="../materias/">regresar</a></small></h1>
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
            <tr> 
            <td> <?php echo $matelia['ID'] ?> </td>
            <td> <?php echo $matelia['Nombre'] ?> </td>
            <td> <?php echo $matelia['Materia'] ?> </td>
            <td> <?php echo $matelia['Licenciatura'] ?> </td>
            <td> <?php echo $matelia['Cuatrimestre'] ?> </td>
            <td> <?php echo $matelia['Status'] ?> </td>
            </tr>        
        </tbody>
    </table>
</body>
</html>