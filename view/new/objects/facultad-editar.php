<?php include_once 'templates/inicio.inc.php'; ?>

<!-- sidebar-dark -->
<?php include_once 'templates/header.inc.php'; ?>

     <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
					<i class="si si-directions"></i>
                    Facultad - <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Gestor</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Panel administrativo</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Facultad</a>
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
            <h3 class="block-title">Facultad <small></small></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                    <i class="si si-pin"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>

            </div>
        </div>
        <div class="block-content block-content-full">
		
			<form action="?c=facultad&a=Guardar" method="POST" onsubmit="return false;" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $facultad->id; ?>" />
				<div class='row'>
				 	<div class="col-lg-6 col-xl-6">
						<div class="form-group">
							<label for="">Facultad</label> <small>*</small>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="far fa-id-card"> </i> 
									</span>
								</div>
								<input type="text" class="form-control" id="example-group2-input1" name="facultad" value="<?php echo $facultad->facultad; ?>">
							</div>
						</div>
					</div>
				</div>

                <div class="row">

					<div class="col-lg-6 col-xl-6">
						<div class="form-group">
							<label for="">Etiqueta <small>Descripcion *</small></label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="far fa-user"></i>
									</span>
								</div>
								<input type="text" class="form-control" id="example-group2-input1" name="etiqueta" value="<?php echo $facultad->etiqueta; ?>">
							</div>
						</div>
					</div>




					<div class="col-lg-6 col-xl-6">
						<label for="">Identificador de la facultad - color <small>*</small></label>
						<div class="form-group">
							
                            <select class="js-select2 form-control" id="example-select2" name="color" style="width: 100%;" data-placeholder="Choose one..">
                                <option>Seleccione el color</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <?php foreach($this->model->ListarColores() as $r): ?>
                                <option value="<?php echo $r->id; ?>"
                                    <?php if ($facultad->color == $r->id) {
                                        echo " selected";
                                        }?>><?php echo $r->etiqueta_color; ?></option>
                                    <?php endforeach; ?>

                            </select>
                        </div>
					</div>

					
                    <input type="submit" class="form-control" id="example-group2-input1" name="enviar" value="Guardar">

                    </div>
                </div>
            </form>


        </div>
    </div>
    <!-- END Dynamic Table Full Pagination -->
   <div class="my-5"></div>
  


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