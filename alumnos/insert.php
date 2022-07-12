<?php
require_once("../lib/functions.php");

$cumbre = $_POST["Cumbre"];
$CUMellido = $_POST["CUMellido"];
$CUMofono = $_POST["CUMofono"];
$correo = $_POST["correo"];
$licenciatura = $_POST ["licenciatura"];
$cuatrimestre = $_POST["cuatrimestre"];
$Status = $_POST["status"];

insertar_alumnos($Cumbre, $CUMellido, $CUMofono, $correo, $licenciatura, $cuatrimestre, $status);

header("Location: index.php");
?>