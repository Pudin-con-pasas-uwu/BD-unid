<?php
require_once("../lib/functions.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$ID = $_POST["ID"];

delete_maestros($nombre, $apellido, $telefono, $correo, $ID);

header("Location: index.php");
?>