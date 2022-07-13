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
    <title>Salty form</title>
</head>
<body>
    <h1>muere fan de bus laight yir</h1>
    <small><a href="../materias/">regresar</a></small>
    <form action="delete.php" method ="post">
        <class = "elem-group">
            <input type="hidden" id="ID" name="ID" value ="<?php echo $matelia['ID']; ?>"> <br>
        
        <input type= "hidden" id="Nombre" name= "Nombre" placeholder="Nombre" value ="<?php echo $matelia['Nombre']; ?>"><br>
        
        <input type= "hidden" id="Materia" name= "Materia" placeholder="Materia" value ="<?php echo $matelia['Materia']; ?>" ><br>
        
        <input type= "hidden" id="Licenciatura" name= "Licenciatura" placeholder="Licenciatura" value ="<?php echo $matelia['Licenciatura']; ?>"> <br>
        
        <input type= "hidden" id="Cuatrimestre" name= "Cuatrimestre" placeholder="Cuatrimestre" value ="<?php echo $matelia['Cuatrimestre']; ?>"><br>
        
        <input type="hidden" id="Status" name= "Status" placeholder="Status" value ="<?php echo $matelia['Status']; ?>"> <br>
        
        <input type= "submit" value="mandar al lobby"><br>


    </form>
</body>
</html> 