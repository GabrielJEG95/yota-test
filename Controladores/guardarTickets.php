<?php
require_once 'conexion.php';


$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$direccion=$_POST['txtDireccion'];
$solucion=$_POST['txtSolucion'];
$problema=$_POST['txtProblema'];
$gestion=$_POST['cmbGestion'];
$phone=$_POST['txtPhone'];
$codigoGestion=$_POST['txtIdGestion'];
$atendido=1;
$gestion='';

$select="SELECT CodigoGestion from gestion where IdGestion='$codigoGestion'";
$resSelect=mysqli_query($conexion,$select);
$regSelect=mysqli_fetch_assoc($resSelect);
$gestion=$regSelect[0];

$insert = $conexion->prepare("INSERT INTO ticket (CodigoGestion,NombreCliente,ApellidoCliente,DireccionCliente,TelefonoCliente,C_Gestion,ProblemaExpuesta,Solucion) VALUES(?,?,?,?,?,?,?,?)");
$insert->bind_param("isssisss");
if ($insert->execute()) {
  $update="UPDATE gestioncliente set atendido='$atendido' where CodGestion='$codigoGestion'";
  mysqli_query($conexion,$update);
  echo 1;
}else{
  echo 0;
}

 ?>
