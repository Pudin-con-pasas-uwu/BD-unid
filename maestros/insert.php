<?php
require_once("../lib/functions.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$Status = $_POST["Status"];

insertar_maestros($nombre, $apellido, $telefono, $correo, $Status);

header("Location: index.php");
?>