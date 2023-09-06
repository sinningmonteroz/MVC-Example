<?php include_once 'templates/inicio.inc.php'; ?>

<!-- sidebar-dark -->
<?php include_once 'templates/header.inc.php'; ?>

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Plan de estudio - <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Gestor</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Panel administrativo</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Plan de estudio</a>
                        </li>
                    </ol>
                </nav>
            </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

    <!-- Dynamic Table Full Pagination -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Listado <small></small></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                    <i class="si si-pin"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#registrar" >
                    <i data-toggle= "tooltip" title="Agregar nuevo usuario" class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">DNI</th>
                        <th style="width: 30%;">Nombre</th>
                        <th style="width: 30%;">Apellidos</th>
                        <th class="">Facultad</th>
                        <th class="">Perfil docente</th>
                        <th class="">Contrato</th>
                        <th class="d-none d-sm-table-cell">Acciones</th>



                        <!-- <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 41; $i++) { ?>
                    <tr>
                        <td class="text-center font-size-sm"><?php //echo $i; ?></td>
                        <td class="font-w600 font-size-sm"><?php //$one->get_name(); ?></td>
                        <td class="font-w600 font-size-sm"><?php //$one->get_name(); ?></td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                           FACI
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php //$one->get_tag(); ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php //$one->get_tag(); ?>
                        </td>
                        <td>
                            <div class='text-center mt-2'>
                                <div class='btn-group text-center' role='group'>
                                    <button type='submit' class='btn btn-sm btn-light'>
                                        <i class='fa fa-edit'></i>
                                    </button>
                                </div>
                                <div class='btn-group text-center' role='group'>  
                                    <button type='submit' class='btn btn-sm btn-light'>
                                        <i class='si si-trash'></i>
                                    </button> 
                                </div>
                            </div>
                           
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full Pagination -->
   

</div>
<!-- END Page Content -->


<!-- Footer inicial -->
<?php include_once 'templates/footer.inc.php'; ?>
<!-- Script importantes -->
<?php include_once 'templates/script.inicial.inc.php'; ?>
<!-- Script DataTables -->
<?php include_once 'templates/script.inc.php'; ?>
<!-- Footer final -->
<?php include_once 'templates/final.inc.php'; ?>