<?php
require_once("../lib/functions.php");

$Nombre = $_POST["Nombre"];
$Materias = $_POST["Materias"];
$Licenciatura = $_POST["Licenciatura"];
$Cuatrimestre = $_POST["Cuatrimestre"];
$Status = $_POST["Status"];

insertar_materias($Nombre, $Materias, $Licenciatura, $Cuatrimestre, $Status);

header("Location: index.php");
?>