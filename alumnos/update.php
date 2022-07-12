<?php
require_once("../lib/functions.php");

$Cumbre = $_POST["Cumbre"];
$CUMellido = $_POST["CUMellido"];
$CUMofono = $_POST["CUMofono"];
$correo = $_POST["correo"];
$licenciatura = $_POST ["licenciatura"];
$cuatrimestre = $_POST["cuatrimestre"];
$status = $_POST["status"];
$cumid = $_POST["cumid"];

update_alumnos($Cumbre, $CUMellido, $CUMofono, $correo, $licenciatura, $cuatrimestre, $status, $cumid);

header("Location: index.php");
?> 