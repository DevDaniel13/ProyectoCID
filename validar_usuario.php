<?php
include 'conexion.php';
$usuario=$_POST['usuario'];
$password=$_POST['pass'];

//$usu_usuario="admin";
//$usu_password="upsin2022";

$sentencia=$conexion->prepare("SELECT * FROM operador WHERE usuario=? AND pass=?");
$sentencia->bind_param('ss',$usuario,$password);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>