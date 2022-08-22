<?php
$hostname_localhost = "localhost";
$database_localhost = "u633620436_cid";
$username_localhost = "u633620436_admin";
$pass_localhost = "Upsin2022";
$json=array();
if(isset($_GET["id"]) && $_GET["nombre"]) && isset($_GET["profesion"]) && isset($_GET["celular"])){
 $id = $_GET['id'];
 $nombre = $_GET['nombre'];
 $profesion = $_GET['profesion'];
 $celular = $_GET['celular'];
 $estado = $_GET['estado'];

 $conexion = mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);
 $update = ("UPDATE empleados SET nombre='{$nombre}',profesion= '{$profesion}',celular='{$celular}',estado='{$estado}' WHERE id = '{$id}'");
 $resultado_update = mysqli_query($conexion,$update);
}else{
 $resulta["id"] = 0;
 $resulta["nombre"] ='WS no retorna';
 $resulta["profesion"] ='WS no retorna';
 $resulta["celular"] ='WS no retorna';
 $json['empleados'][]=$resulta;
 echo json_encode($json);
}
?>