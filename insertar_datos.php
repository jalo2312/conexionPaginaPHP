<?php
include "basededatos.php";

$codigo = $_POST["her_cod"];
$descripcion = $_POST["her_descripcion"];
$estado2 = $_POST["her_estado"];
$entrega = $_POST["her_fecha_entrega"];
$devolucion = $_POST["her_fecha_devolucion"];
$observacion = $_POST["her_observacion"];
$her_fecha_exp = $_POST['her_fecha_expedicion'];
$her_fecha_ven = $_POST['her_fecha_vencimiento'];
$cedula = $_POST["emple_cedula"];

// Consulta preparada
$consulta = "INSERT INTO herramientas (her_cod, her_descripcion, her_estado, her_fecha_entrega, her_fecha_devolucion, her_observacion, her_fecha_expedicion, her_fecha_vencimiento, emple_cedula) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$statement = mysqli_prepare($conexion, $consulta);

// Vincular parámetros
mysqli_stmt_bind_param($statement, "sssssssss", $codigo, $descripcion, $estado2, $entrega, $devolucion, $observacion, $her_fecha_exp, $her_fecha_ven, $cedula);

// Ejecutar consulta
$resultado = mysqli_stmt_execute($statement);

if ($resultado) {
    echo "Herramienta insertada correctamente";
} else {
    echo "Error al insertar herramienta: " . mysqli_error($conexion);
}

// Cerrar conexión a la base de datos
mysqli_close($conexion);

?>