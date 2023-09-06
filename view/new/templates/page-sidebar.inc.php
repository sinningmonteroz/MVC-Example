<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5" style="background-color:#0D812B !important">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="">
            <img src="assets/media/favicons/logo.png" alt="logo" style="margin-left: -17px; margin-top:0px; display:block; width:200px;">
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            

           <li class="nav-main-heading">Menu</li>

           <li class="nav-main-item">
                <a class="nav-main-link" href="usuario-view.php">
                    <i class="nav-main-link-icon si si-grid"></i>
                    <span class="nav-main-link-name">Inicio</span>
                </a>
            </li>

            <li class="nav-main-heading">Gestores</li>

            <li class="nav-main-item">
                <a class="nav-main-link" href="usuario-view.php">
                    <i class="nav-main-link-icon si si-users"></i>
                    <span class="nav-main-link-name">Usuarios</span>
                </a>
            </li>

            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="usuario-view.php">
                    <i class="nav-main-link-icon si si-calendar"></i>
                    <span class="nav-main-link-name">Plan de estudio</span>
                    
                </a>
                <ul class="nav-main-submenu">
                    <a class="nav-main-link" href="usuario-view.php">
                        <i class="nav-main-link-icon si si-eye"></i>
                        <span class="nav-main-link-name">Ver plan de estudio</span>
                    </a>
                    <a class="nav-main-link" href="usuario-view.php">
                        <i class="nav-main-link-icon si si-directions"></i>
                        <span class="nav-main-link-name">Facultades</span>
                    </a>
                    <a class="nav-main-link" href="usuario-view.php">
                        <i class="nav-main-link-icon si si-flag"></i>
                        <span class="nav-main-link-name">Programas</span>
                    </a>
                    <a class="nav-main-link" href="usuario-view.php">
                        <i class="nav-main-link-icon si si-notebook"></i>
                        <span class="nav-main-link-name">Asignaturas</span>
                    </a>
                </ul>
            </li>
            
            <li class="nav-main-heading">Gestores</li>
            
            <li class="nav-main-item">
                <a class="btn-exit-system nav-main-link" href="">
                    <i class="nav-main-link-icon si si-power"></i> 
                    <span class="nav-main-link-name">Salir</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>