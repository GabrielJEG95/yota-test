<?php
require_once 'conexion.php';

$sql="SELECT a.NombreCliente,a.ApellidoCliente,b.FechaCreacion,b.atendido,c.NombreGestion
from ticket A
join gestioncliente B
on a.CodigoGestion=b.CodGestion
join gestion c
on a.C_Gestion=c.IdGestion";

$res=mysqli_query($conexion,$sql);
$tabla="";
while ($item = mysqli_fetch_assoc($res)) {
  $tabla .='{
		"NombreCliente":"'.$item['NombreCliente'].'",
		"ApellidoCliente":"'.$item['ApellidoCliente'].'",
    "FechaCreacion":"'.$item['FechaCreacion'].'",
    "NombreGestion":"'.$item['NombreGestion'].'",
    "atendido":"'.$item['atendido'].'"
	},';
}

$tabla =substr($tabla,0, strlen($tabla)-1);

echo '{"Data":['.$tabla.']}';

 ?>
