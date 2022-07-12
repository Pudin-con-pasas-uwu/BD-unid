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
    <h1>muere fan de bus laight yir</h1>
    <small><a href="../alumnos/">regresar</a></small>
    <form action="borrar.php" method ="post">
        <class = "elem-group">
            <input type="hidden" id="cumid" name="cumid" value ="<?php echo $alumno['cumid']; ?>"> <br>
        
        <input type= "hidden" id="Cumbre" name= "Cumbre" placeholder="Nombre" value ="<?php echo $alumno['Cumbre']; ?>"><br>
        
        <input type= "hidden" id="CUMellido" name= "CUMellido" placeholder="apellido" value ="<?php echo $alumno['CUMellido']; ?>" ><br>
        
        <input type= "hidden" id="CUMofono" name= "CUMofono" placeholder="telefono" value ="<?php echo $alumno['CUMofono']; ?>"> <br>
        
        <input type= "hidden" id="correo" name= "correo" placeholder="correo" value ="<?php echo $alumno['correo']; ?>"><br>
        
        <input type="hidden" id="licenciatura" name= "licenciatura" placeholder="licenciatura" value ="<?php echo $alumno['licenciatura']; ?>"> <br>
        
        <input type="hidden" id="cuatrimestre" name= "cuatrimestre" placeholder="cuatrimestre" value ="<?php echo $alumno['cuatrimestre']; ?>"> <br>
        
        <input type= "hidden" id="status" name= "status" placeholder="status" value ="<?php echo $alumno['status']; ?>"><br>
        <input type= "submit" value="mandar al lobby"><br>


    </form>
</body>
</html> 