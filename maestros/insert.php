<?php
require_once("../lib/functions.php");

$nombre = $_POST["Cumbre"];
$apellido = $_POST["CUMellido"];
$telefono = $_POST["CUMofono"];
$correo = $_POST["correo"];
$Status = $_POST["status"];

insertar_maestros($nombre, $CUMofono, $apellido, $telefono, $correo, $Status);

header("Location: index.php");
?>