<?php
include 'basededatos.php';
$usu_usuario = $_POST['usuario'];
$usu_contraseña = $_POST['clave']; 

//$usu_usuario = "Santiago";
//$usu_contraseña="123";

$sentencia = $conexion->prepare("SELECT * FROM usuarios WHERE usu_usuario=? AND usu_clave=?");
$sentencia->bind_param('ss', $usu_usuario, $usu_contraseña);    
$sentencia->execute();

$resultado = $sentencia->get_result();
if($fila = $resultado->fetch_assoc()){
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}
$sentencia->close();
$conexion->close();


?>