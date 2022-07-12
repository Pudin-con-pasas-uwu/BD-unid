<?php 

$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_alumno($connect, $id);
$alumno = mysqli_fetch_array ($resultado);
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
    <h1>detalles del alumnos <?php echo $alumno['Cumbre']." ". $alumno['CUMellido']?> <small><a href="../alumnos/">regresar</a></small></h1>
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
            <tr> 
                <td> <?php echo $alumno['cumid'] ?> </td>
                <td> <?php echo $alumno['Cumbre'] ?> </td>
                <td> <?php echo $alumno['CUMellido'] ?> </td>
                <td> <?php echo $alumno['CUMofono'] ?> </td>
                <td> <?php echo $alumno['correo'] ?> </td>
                <td> <?php echo $alumno['licenciatura'] ?> </td>
                <td> <?php echo $alumno['cuatrimestre'] ?> </td>
                <td> <?php echo $alumno['status'] ?> </td>
            </tr>        
        </tbody>
    </table>
</body>
</html> 