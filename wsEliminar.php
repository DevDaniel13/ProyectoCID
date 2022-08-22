<?php 
$hostname_localhost = "localhost";
$database_localhost = "u633620436_cid";
$username_localhost = "u633620436_admin";
$pass_localhost = "Upsin2022";
$json=array();
if(isset($_GET["id"])){
 $id = $_GET['id'];
 $conexion = mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);
 $delete = ("DELETE FROM empleados WHERE id ='{$id}'");
 $resultado_delete = mysqli_query($conexion,$delete);
}else{
 $resulta["id"] = 0;
 $json['contactos'][]=$resulta;
 echo json_encode($json);
}
?>