<?php
require_once 'conexion.php';

$sql="SELECT a.CodGestion,b.NombreGestion
from gestioncliente a
join gestion b
on a.C_Gestion=b.IdGestion
where a.atendido=0;";

$res=mysqli_query($conexion,$sql);
$tabla="";
while ($item = mysqli_fetch_assoc($res)) {
  $tabla .='{
		"CodGestion":"'.$item['CodGestion'].'",
		"NombreGestion":"'.$item['NombreGestion'].'"
	},';
}

$tabla =substr($tabla,0, strlen($tabla)-1);

echo '{"Data":['.$tabla.']}';

 ?>
