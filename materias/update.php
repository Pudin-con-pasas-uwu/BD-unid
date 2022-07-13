<?php
require_once("../lib/functions.php");

$Nombre = $_POST["Nombre"];
$Materia = $_POST["Materia"];
$Licenciatura = $_POST["Licenciatura"];
$ID = $_POST["ID"];

update_materias($Nombre, $Materia, $Licenciatura,  $ID);

header("Location: index.php");
?> 