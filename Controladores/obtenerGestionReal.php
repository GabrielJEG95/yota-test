<?php
require_once 'conexion.php';

$query="SELECT IdGestion,NombreGestion FROM gestion";
$resultado=mysqli_query($conexion,$query);


while ($fila = mysqli_fetch_array($resultado)) {

	echo '<option value="'.$fila['IdGestion'].'">'.$fila['NombreGestion'].'</option>';
}
?>
