<?php
include 'basededatos.php';

$consulta = "SELECT usu_id, usu_usuario FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    $usuarios = array();
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // Concatenar el ID y el nombre con un guion medio o cualquier otro separador
        $usuarios[] = $fila['usu_id'] . "-" . $fila['usu_usuario'];
    }
    echo implode(",", $usuarios); // Devuelve los pares ID-nombre separados por comas
} else {
    echo "Error al recuperar los usuarios: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
