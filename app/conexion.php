<?php
//header("Access-Control-Allow-Origin: *");//probando para Android 7

$hostname='localhost';
$database= 'u909812438_chalalasapp';
$username= 'u909812438_root';
$password='QWERTYu5544';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
echo "El sitio web está experimentado problemas";
}
//else {
// echo "Conexión exitosa";
//}
?>