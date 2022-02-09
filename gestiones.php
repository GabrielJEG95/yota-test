<?php
header("Cache-Control: no-cache, must-revalidate");
require_once 'Controladores/validacion.php';
require_once 'Controladores/conexion.php';

 ?>

 <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <title>Portal de Gestiones | Yota Nicaragua</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" type="image/png" href="vistas/images/icons/img-01.png"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="Controladores/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="Controladores/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" href="vistas/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="vistas/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="Controladores/alertifyjs/alertify.js"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162603900-1');
</script>

</head>
<body class="sidebar-mini sidebar-collapse" >
<div class="wrapper">

  <!-- Navbar -->
  <?php require_once 'vistas/navbar.html'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php
    require_once 'vistas/sliderbar.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gestiones Solicitadas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
              <li class="breadcrumb-item active">Gestiones Solicitadas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <form method="POST" id="frmDatos" name="frmDatos">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- aqui va la tabla -->

        <?php require_once 'vistas/form/form_gestiones.php';  ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
   </form>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php require_once 'vistas/footer.html'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>

 <script src="vistas/plugins/datatables/jquery.dataTables.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<script src="Controladores/notificacion.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="vistas/dist/js/demo.js"></script>

<script src="Controladores/mascaras.js"></script>
<script src="vistas/plugins/inputmask/jquery.inputmask.bundle.js"></script>
<script src="vistas/plugins/moment/moment.min.js"></script>
<script src="vistas/plugins/select2/js/select2.full.min.js"></script>

<script src="Controladores/gestioncliente.js"></script>
<script>
  $('#btnInfo').click(function(){
      alertify.alert("Desarollador","Desarrollado por  Gabriel Espinoza Genet. <br>"

        );
    });

</script>
</body>
</html>
