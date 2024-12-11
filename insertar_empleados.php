<?php
include "basededatos.php";

// Recibir datos del empleado desde la aplicación Android
$cedula = $_POST["emple_cedula"];
$nombre = $_POST["emple_nombre"];
$estado = $_POST["emple_estado"];
$cargo = $_POST["emple_cargo"];
$usuario = $_POST["usu_id"];

// Consulta para insertar empleado en la tabla de empleados
$consulta = "INSERT INTO empleados values('".$cedula."','".$nombre."','".$estado."','".$cargo."','".$usuario."')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    echo "Empleado insertado correctamente";
} else {
    echo "Error al insertar empleado: " . mysqli_error($conexion);
}

// Cerrar conexión a la base de datos
mysqli_close($conexion);
?>

