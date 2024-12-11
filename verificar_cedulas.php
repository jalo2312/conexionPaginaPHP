<?php
include 'basededatos.php';

$consulta = "SELECT emple_cedula FROM empleados";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    $cedulas = array();
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // Concatenar el ID y el nombre con un guion medio o cualquier otro separador
        $cedulas[] = $fila['emple_cedula'];
    }
    echo implode(",", $cedulas); // Devuelve los pares ID-nombre separados por comas
} else {
    echo "Error al recuperar las cedulas: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
