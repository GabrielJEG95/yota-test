<?php
session_start();
ob_start();
require_once 'conexion.php';

$usuario=$_POST['user'];
$pass=$_POST['pass'];

$_SESSION['sesion_exitosa']=0;

$res=mysqli_query($conexion,"SELECT * from users where login='$usuario'");
while ($item = mysqli_fetch_assoc($res)) {
	$IdUsuario=$item['CodigoUsuario'];
	$password=$item['password'];
	$nombre=$item['NombreUsuario'];
	$apellido=$item['ApellidoUsuario'];
}

$_SESSION['usuario']=$nombre." ".$apellido;
$consultaValidacion=mysqli_query($conexion,"SELECT password from users where password ='$pass'");
$numRow=mysqli_num_rows($consultaValidacion);
if ($numRow==1) {
	$_SESSION['sesion_exitosa']=1;
	echo 1;
}else{
	echo 0;
}

 ?>
