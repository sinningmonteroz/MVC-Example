<?php include_once 'templates/inicio.inc.php'; ?>

        <!-- END Stylesheets -->
    </head>
<body>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('assets/media/photos/photo6@2x.jpg');">
    <div class="hero-static bg-white-95">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5 col-xl-4">
                    <!-- Sign In Block -->
                    <div class="block block-themed block-fx-shadow mb-0">
                        <div class="block-header">
                            <h3 class="block-title">Inicio de sesión</h3>
                            <div class="block-options">
                                <a class="btn-block-option font-size-sm" href="op_auth_reminder.php" data-toggle="tooltip"  title="Recuperar su contraseña">
                                    Olvidó su contraseña?
                                </a>
                               
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="p-sm-3 px-lg-4 py-lg-3">
                                <div class="col-12 logo" style="">
                                    <img src="assets/media/favicons/logo.png" alt="logo" style="margin-left: auto;margin-right: auto; display:block; width:350px;">
                                </div>
                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signin" action="?c=login&a=Comprobar" method="POST">
                                    <div class="py-3">
                                         <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="si si-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control form-control-alt form-control-sm" id="login-username" name="usuario" placeholder="Usuario">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="si si-key"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control form-control-alt form-control-sm" id="login-password" name="password" placeholder="Contraseña">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                                <label class="custom-control-label font-w400" for="login-remember">Recuerdame</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-xl-12" style="margin-left: auto;margin-right: auto; display:block;">
                                            <button type="submit" class="btn btn-block btn-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Iniciar sesión
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END Sign In Block -->
                </div>
            </div>
        </div>
        <div class="content content-full font-size-sm text-muted text-center">
            <strong>Gestor de carga academica</strong> &copy; <span data-toggle="year-copy">2020</span>
        </div>
    </div>
</div>
<!-- END Page Content -->


<!-- Script importantes -->
<?php include_once 'templates/script.inicial.inc.php'; ?>

<!-- Footer final -->
<?php include_once 'templates/final.inc.php'; ?>
