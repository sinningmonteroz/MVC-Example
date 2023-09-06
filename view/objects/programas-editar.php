<h1 class="page-header">
    <?php echo $programas->id != null ? $programas->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=programas">Facultad</a></li>
  <li class="active"><?php echo $programas->id != null ? $programas->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=programas&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $programas->id; ?>" />
    <div class="form-group">
        <label>Nombre del Programa</label>
        <input type="text" name="nombre" value="<?php echo $programas->nombre; ?>" class="form-control" placeholder="Ingrese el nombre de la facultad" required>
    </div>

    <div class="form-group">
        <label>Facultad</label>
        <select name="id_facultad" class="form-control">
        <?php foreach($this->model->ListarFacultades() as $r): ?>
        <option value="<?php echo $r->id; ?>"
        <?php if ($programas->id_facultad == $r->id) {
            echo " selected";
        
        }?>><?php echo $r->facultad; ?></option>
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