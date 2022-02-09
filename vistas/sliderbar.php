
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-purple elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-white">
      <img src="vistas/dist/img/yota2.png" alt="Yota" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light" >Gestiones</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>

        <div class="info">
          <a href="#" class="d-block" style="color: skyblue;"><?php echo $_SESSION['usuario']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active" style="background: rgb(0,200,210);">
              <i class="nav-icon fab fa-buromobelexperte"></i>
              <p>
                 Tareas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="inicio.php" class="nav-link">
                  <i class="fas fa-money-check-alt"></i>
                  <p>Inicio</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="gestiones.php" class="nav-link">
                  <i class="fas fa-sitemap"></i>
                  <p>Gestiones</p>
                </a>
              </li>
              <li class="nav-item">
               <a href="historial.php" class="nav-link">
                 <i class="fas fa-sitemap"></i>
                 <p>Historial de Gestiones</p>
               </a>
             </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
