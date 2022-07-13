<?php
require_once("../lib/functions.php");

$Nombre = $_POST["Nombre"];
$Materia = $_POST["Materia"];
$Licenciatura = $_POST ["Licenciatura"];
$Cuatrimestre = $_POST["Cuatrimestre"];
$Status = $_POST["Status"];
$ID = $_POST["ID"];

delete_materias($Nombre, $Materia, $Licenciatura, $Cuatrimestre, $Status, $ID);

header("Location: index.php");
?> 