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

$select="SELECT C_Gestion from gestioncliente where CodGestion='$codigoGestion'";
$resSelect=mysqli_query($conexion,$select);
while ($item = mysqli_fetch_assoc($resSelect)) {
    $gestion=$item['C_Gestion'];
}

$insert = $conexion->prepare("INSERT INTO ticket (CodigoGestion,NombreCliente,ApellidoCliente,DireccionCliente,TelefonoCliente,C_Gestion,ProblemaExpuesta,Solucion) VALUES(?,?,?,?,?,?,?,?)");
$insert->bind_param("isssiiss",$codigoGestion,$nombre,$apellido,$direccion,$phone,$gestion,$problema,$solucion);
if ($insert->execute()) {
  $update="UPDATE gestioncliente set atendido='$atendido' where CodGestion='$codigoGestion'";
  mysqli_query($conexion,$update);
  echo 1;
}else{
  echo 0;
}

 ?>
