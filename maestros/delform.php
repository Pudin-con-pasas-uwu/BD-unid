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
    <h1>muere fan de bus laight yir</h1>
    <small><a href="../maestros/">regresar</a></small>
    <form action="borrar.php" method ="post">
        <class = "elem-group">
            <input type="hidden" id="ID" name="ID" value ="<?php echo $maetro['ID']; ?>"> <br>
        
        <input type= "hidden" id="nombre" name= "nombre" placeholder="nombre" value ="<?php echo $maetro['nombre']; ?>"><br>
        
        <input type= "hidden" id="apellido" name= "apellido" placeholder="Materia" value ="<?php echo $maetro['apellido']; ?>" ><br>
        
        <input type= "hidden" id="telefono" name= "telefono" placeholder="telefono" value ="<?php echo $maetro['telefono']; ?>"> <br>
        
        <input type= "hidden" id="correo" name= "correo" placeholder="correo" value ="<?php echo $maetro['correo']; ?>"><br>
        
        <input type="hidden" id="Status" name= "Status" placeholder="Status" value ="<?php echo $maetro['Status']; ?>"> <br>
        
        <input type= "submit" value="mandar al lobby"><br>


    </form>
</body>
</html> 