<?php
$hostname='localhost';
$database='u633620436_cid';
$username='u633620436_admin';
$password='Upsin2022';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>