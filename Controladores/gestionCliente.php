<?php
date_default_timezone_set('America/Managua');
require_once 'conexion.php';

$IdGestion=$_POST['IdGestion'];
$atendido=0;
$FechaCreacion=date('Y-m-d H:i:s');


$stmt=$conexion->prepare("INSERT INTO gestioncliente (C_Gestion,atendido,FechaCreacion) VALUES(?,?,?)");
$stmt->bind_param("iis",$IdGestion,$atendido,$FechaCreacion);

if ($stmt->execute()) {
  echo 1;
}else{
  echo 'error';
}

 ?>
