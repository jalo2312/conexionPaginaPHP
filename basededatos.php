<?php

$hostname='localhost';
$database='stock2';
$username ='root';
$password = '';

$conexion=mysqli_connect($hostname,$username,$password,$database);
    if($conexion -> connect_errno){
        echo "Lo sentimos, el sitio web esta experimentado errores";
    }




?>