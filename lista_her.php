<?php
include "basededatos.php";

if (!$conexion) {
    die("Error: No se pudo conectar a la base de datos.");
}

// Consulta preparada para seleccionar todos los datos de la tabla herramientas
$consulta = "SELECT her_cod, her_descripcion, her_estado, her_fecha_entrega, her_fecha_devolucion, her_observacion, her_fecha_expedicion, her_fecha_vencimiento, emple_cedula FROM herramientas";

// Preparar la consulta
$statement = mysqli_prepare($conexion, $consulta);

if (!$statement) {
    die("Error al preparar la consulta: " . mysqli_error($conexion));
}

// Ejecutar la consulta
mysqli_stmt_execute($statement);

// Obtener el resultado
$resultado = mysqli_stmt_get_result($statement);

// Array para almacenar los resultados
$herramientas = array();

// Iterar sobre los resultados y almacenarlos en el array
while ($fila = mysqli_fetch_assoc($resultado)) {
    $herramientas[] = $fila;
}

// Devolver los datos en formato JSON
echo json_encode($herramientas);

// Cerrar el statement y la conexión a la base de datos
mysqli_stmt_close($statement);
mysqli_close($conexion);
?>

