<?php
//require_once 'Controllers/conexion.php';

session_start();
session_destroy();
ob_start();

header("Location:../index.php");

?>
