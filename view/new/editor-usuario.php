<?php include_once 'templates/inicio.inc.php'; ?>

<!-- sidebar-dark -->
<?php include_once 'templates/header.inc.php'; ?>

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Usuario - <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">usuario</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Panel administrativo</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Usuario</a>
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
            <h3 class="block-title">Usuario <small></small></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                    <i class="si si-pin"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>

            </div>
        </div>
        <div class="block-content block-content-full">
		
			<form action="be_forms_input_groups.php" method="POST" onsubmit="return false;">
			
				<div class='row'>
				 	<div class="col-lg-6 col-xl-6">
						<div class="form-group">
							<label for="">Identificacion</label> <small>*</small>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="far fa-id-card"> </i> 
									</span>
								</div>
								<input type="text" class="form-control" id="example-group2-input1" name="example-group2-input1">
							</div>
						</div>
					</div>
				</div>

                <div class="row">

					<div class="col-lg-6 col-xl-6">
						<div class="form-group">
							<label for="">Nombres <small>*</small></label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="far fa-user"></i>
									</span>
								</div>
								<input type="text" class="form-control" id="example-group2-input1" name="example-group2-input1">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-6">
						<div class="form-group">
							<label for="">Apellidos <small>*</small></label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="far fa-user"></i>
									</span>
								</div>
								<input type="text" class="form-control" id="example-group2-input1" name="example-group2-input1">
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-xl-6">
						<label for="">Facultad <small>*</small></label>
						<div class="form-group">
                            <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                <option>Seleccione la facultad</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">HTML</option>
                                <option value="2">CSS</option>
                                <option value="3">JavaScript</option>
                                <option value="4">PHP</option>
                                <option value="5">MySQL</option>
                                <option value="6">Ruby</option>
                                <option value="7">Angular</option>
                                <option value="8">React</option>
                                <option value="9">Vue.js</option>
                            </select>
                        </div>
					</div>

					<div class="col-lg-6 col-xl-6">
						<label for="">Tipo de contrato <small>*</small></label>
						<div class="form-group">
                            <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                <option>Seleccione el tipo de contrato</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">HTML</option>
                                <option value="2">CSS</option>
                                <option value="3">JavaScript</option>
                                <option value="4">PHP</option>
                                <option value="5">MySQL</option>
                                <option value="6">Ruby</option>
                                <option value="7">Angular</option>
                                <option value="8">React</option>
                                <option value="9">Vue.js</option>
                            </select>
                        </div>
					</div>

					<div class="col-lg-6 col-xl-6">
						<label for="">Perfil docente <small>*</small></label>
						<div class="form-group">
                            <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                <option>Seleccione el perfil de docente</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">HTML</option>
                                <option value="2">CSS</option>
                                <option value="3">JavaScript</option>
                                <option value="4">PHP</option>
                                <option value="5">MySQL</option>
                                <option value="6">Ruby</option>
                                <option value="7">Angular</option>
                                <option value="8">React</option>
                                <option value="9">Vue.js</option>
                            </select>
                        </div>
					</div>

					<div class="col-lg-6 col-xl-6">
						<label for="">Cargo <small>*</small></label>
						<div class="form-group">
							
                            <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                <option>Seleccione el cargo</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">HTML</option>
                                <option value="2">CSS</option>
                                <option value="3">JavaScript</option>
                                <option value="4">PHP</option>
                                <option value="5">MySQL</option>
                                <option value="6">Ruby</option>
                                <option value="7">Angular</option>
                                <option value="8">React</option>
                                <option value="9">Vue.js</option>
                            </select>
                        </div>
					</div>

					
                   
                        
                        <!-- <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control" id="example-group2-input2" name="example-group2-input2">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="far fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-euro-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control text-center" id="example-group2-input3" name="example-group2-input3" placeholder="..">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text input-group-text-alt">
                                        <i class="far fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control form-control-alt" id="example-group2-input1-alt" name="example-group2-input1-alt">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control form-control-alt" id="example-group2-input2-alt" name="example-group2-input2-alt">
                                <div class="input-group-append">
                                    <span class="input-group-text input-group-text-alt">
                                        <i class="far fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text input-group-text-alt">
                                        <i class="fa fa-euro-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control form-control-alt text-center" id="example-group2-input3-alt" name="example-group2-input3-alt" placeholder="..">
                                <div class="input-group-append">
                                    <span class="input-group-text input-group-text-alt">
                                        <i class="si si-wallet"></i>
                                    </span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </form>


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