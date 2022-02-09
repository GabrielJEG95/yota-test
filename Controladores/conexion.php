<?php
ini_set('display_error','On');
error_reporting(E_ALL);

$hostname_localhost="127.0.0.1";
$database_localhost="testyota";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

$conexion->set_charset('utf8');
?>
