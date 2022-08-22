<?php
$hostname_localhost = "localhost";
$database_localhost = "u633620436_cid";
$username_localhost = "u633620436_admin";
$pass_localhost = "Upsin2022";
$json=array();
if(isset($_GET["nombre"]) && isset($_GET["profesion"]) && isset($_GET["celular"]){
 $nombre = $_GET['nombre'];
 $profesion = $_GET['profesion'];
 $celular = $_GET['celular'];
 $estado = $_GET['estado'];
 $idMovil = $_GET['idMovil'];

 $conexion = mysqli_connect($hostname_localhost,$username_localhost,$pass_localhost,$database_localhost);
 $insert("INSERT INTO empleados(id, nombre, profesion, celular, estado, idMovil) VALUES(NULL,'{$nombre}','{$profesion}','{$celular}', '{$estado}', '{$idMovil}')");
 $resultado_insert = mysqli_query($conexion,$insert);
 if($resultado_insert){
 $consulta = "SELECT * FROM empleados";
 $resultado = mysqli_query($conexion,$consulta);
 if($registro = mysqli_fetch_array($resultado)){
 $json['empleado'][]=$registro;
 }
 mysqli_close($conexion);
 echo json_encode($json);
 }
 else{
 $resulta["id"] = 0;
 $resulta["nombre"] ='No registrado';
 $resulta["profesion"] ='No registrado';
 $resulta["celular"] ='No registrado';
 $resulta["estado"] = 0;
 $resulta["idMovil"] = 'No registrado';
 $json['empleados'][]=$resulta;
 echo json_encode($json);
 }
}else{
 $resulta["id"] = 0;
 $resulta["nombre"] ='WS no retorna';
 $resulta["profesion"] ='WS no retorna';
 $resulta["celular"] ='WS no retorna';
 $resulta["estado"] = 0;
 $resulta["idMovil"] = 'WS no retorna';
 $json['empleados'][]=$resulta;
 echo json_encode($json);
}
?>