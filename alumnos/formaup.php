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
    <title>Salty form</title>
</head>
<body>
    <small><a href="../alumnos/">regresar</a></small>
    <form action="update.php" method ="post">
        <class = "elem-group">
            <input type="hidden" id="cumid" name="cumid" value ="<?php echo $alumno['cumid']; ?>"> <br>
        <label for="Cumbre">nombre</label> <br>
        <input type= "text" id="Cumbre" name= "Cumbre" placeholder="Nombre" value ="<?php echo $alumno['Cumbre']; ?>"><br>
        <label for="CUMellido">apellido</label> <br>
        <input type= "text" id="CUMellido" name= "CUMellido" placeholder="apellido" value ="<?php echo $alumno['CUMellido']; ?>" ><br>
        <label for="CUMofono">telefono</label> <br>
        <input type= "text" id="CUMofono" name= "CUMofono" placeholder="telefono" value ="<?php echo $alumno['CUMofono']; ?>"> <br>
        <label for="correo">correo</label> <br>
        <input type= "text" id="correo" name= "correo" placeholder="correo" value ="<?php echo $alumno['correo']; ?>"><br>
        <label for ="licenciatura">licenciatura</label> <br>
        <input type="text" id="licenciatura" name= "licenciatura" placeholder="licenciatura" value ="<?php echo $alumno['licenciatura']; ?>"> <br>
        <label for="cuatrimestre">cuatrimestre</label> <br>
        <input type="text" id="cuatrimestre" name= "cuatrimestre" placeholder="cuatrimestre" value ="<?php echo $alumno['cuatrimestre']; ?>"> <br>
        <label for="status">status</label> <br>
        <input type= "text" id="status" name= "status" placeholder="status" value ="<?php echo $alumno['status']; ?>"><br>
        <input type= "submit"><br>


    </form>
</body>
</html> 