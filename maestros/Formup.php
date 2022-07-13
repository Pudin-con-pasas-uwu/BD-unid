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
    <title>Salty form</title>
</head>
<body>
    <small><a href="../alumnos/">regresar</a></small>
    <form action="update.php" method ="post">
        <class = "elem-group">
            <input type="hidden" id="ID" name="ID" value ="<?php echo $maetro['ID']; ?>"> <br>
        <label for="nombre">nombre</label> <br>
        <input type= "text" id="nombre" name= "nombre" placeholder="Nombre" value ="<?php echo $maetro['nombre']; ?>"><br>
        <label for="apellido">apellido</label> <br>
        <input type= "text" id="apellido" name= "apellido" placeholder="apellido" value ="<?php echo $maetro['apellido']; ?>" ><br>
        <label for="telefono">telefono</label> <br>
        <input type= "text" id="telefono" name= "telefono" placeholder="telefono" value ="<?php echo $maetro['telefono']; ?>"> <br>
        <label for="correo">correo</label> <br>
        <input type= "text" id="correo" name= "correo" placeholder="correo" value ="<?php echo $maetro['correo']; ?>"><br>
        <label for ="licenciatura">licenciatura</label> <br>
        <input type= "text" id="Status" name= "Status" placeholder="status" value ="<?php echo $maetro['Status']; ?>"><br>
        <input type= "submit"><br>


    </form>
</body>
</html> 