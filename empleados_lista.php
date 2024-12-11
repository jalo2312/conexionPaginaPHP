
<?php
include 'basededatos.php';

$consulta = "SELECT emple_cedula, emple_nombre FROM empleados"; // Consulta para obtener cédula y nombre de empleados
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    $empleados = array();
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // Concatenar la cédula y el nombre con un guion medio o cualquier otro separador
        $empleados[] = $fila['emple_cedula'] . "-" . $fila['emple_nombre'];
    }
    // Devuelve los pares cédula-nombre uno debajo del otro
    foreach ($empleados as $empleado) {
        echo $empleado . "<br>"; // Agrega un salto de línea después de cada empleado
    }
} else {
    echo "Error al recuperar los empleados: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>