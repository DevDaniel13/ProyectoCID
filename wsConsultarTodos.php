<?php 
$hostname_localhost = "localhost";
$database_localhost = "u633620436_cid";
$username_localhost = "u633620436_admin";
$pass_localhost = "Upsin2022";
$json=array();
$idMovil= $_GET['idMovil'];
$conexion = mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);

$consulta = ("SELECT * FROM empleados where idMovil='{$idMovil}' ORDER BY nombre");
$resultado_consulta = mysqli_query($conexion,$consulta);
while($registro=mysqli_fetch_array($resultado_consulta)){
 	$json['empleados'][]=$registro;
}
mysqli_close($conexion);
echo json_encode($json);
?>