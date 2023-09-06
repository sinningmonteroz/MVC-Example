<h1 class="page-header">
    <?php echo $cliente->id != null ? $cliente->nombres : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Usuario</a></li>
  <li class="active"><?php echo $cliente->id != null ? $cliente->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $cliente->id; ?>" />
    <div class="form-group">
        <label>Identificación</label>
        <input type="text" name="dni" value="<?php echo $cliente->identidad; ?>" class="form-control" placeholder="Ingrese el número de identificación" required>
    </div>
    
    <div class="form-group">
        <label>Nombres</label>
        <input type="text" name="nombres" value="<?php echo $cliente->nombres; ?>" class="form-control" placeholder="Ingrese el nombre" required>
    </div>
    
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo $cliente->apellidos; ?>" class="form-control" placeholder="Ingrese los apellidos" required>
    </div>
    
    <div class="form-group">
        <label>Facultad</label>
        <select name="facultad" class="form-control">
        <?php foreach($this->model->ListarFacultad() as $r): ?>
        <option value="<?php echo $r->id; ?>"
        <?php if ($cliente->facultad == $r->id) {
            echo " selected";
        
        }?>><?php echo $r->facultad; ?></option>
        <?php endforeach; ?>
        </select>
    </div>
     <div class="form-group">
        <label>Perfil docente</label>
        <input type="text" name="perfil-docente" value="<?php echo $cliente->perfil_docente; ?>" class="form-control" placeholder="Ingrese detalles del perfil" required>
    </div>
    <div class="form-group">
        <label>Tipo de contrato</label>
        <select name="tipo-contrato" class="form-control" placeholder="Tipo de contrato" >
        <?php foreach($this->model->ListarContrato() as $r): ?>
        <option value="<?php echo $r->id; ?>"
        <?php if ($cliente->tipo_contrato == $r->id) {
            echo " selected";
        
        }?>><?php echo $r->contrato; ?></option>
        <?php endforeach; ?>
        </select>
    </div> 
    <div class="form-group">
        <label>Cargo</label>
        <select name="id-cargo" class="form-control">
        <?php foreach($this->model->ListarCargo() as $r): ?>
        <option value="<?php echo $r->id; ?>"
        <?php if ($cliente->id_cargo == $r->id) {
            echo " selected";
        
        }?>><?php echo $r->cargo; ?></option>
        <?php endforeach; ?>
        </select>
    </div>          
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>