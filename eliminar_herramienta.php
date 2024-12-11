<?php
// Incluir el archivo de conexión a la base de datos
include "basededatos.php";

// Obtener el código de la herramienta a eliminar enviado desde la aplicación Android
$her_cod = $_POST['her_cod'];

// Query para eliminar la herramienta de la base de datos
$sql = "DELETE FROM herramientas WHERE her_cod = '$her_cod'";

// Ejecutar la query
if ($conexion->query($sql) === TRUE) {
    echo "Datos eliminados correctamente";
} else {
    echo "Error al eliminar los datos: " . mysqli_error($conexion);
}

// Cerrar conexión
$conexion->close();
?>
