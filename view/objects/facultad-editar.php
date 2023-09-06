<h1 class="page-header">
    <?php echo $facultad->id != null ? $facultad->facultad : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=facultad">Facultad</a></li>
  <li class="active"><?php echo $facultad->id != null ? $facultad->facultad : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=facultad&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $facultad->id; ?>" />
    <div class="form-group">
        <label>Facultad</label>
        <input type="text" name="facultad" value="<?php echo $facultad->facultad; ?>" class="form-control" placeholder="Ingrese el nombre de la facultad" required>
    </div>
    
    <div class="form-group">
        <label>Etiqueta</label>
        <input type="text" name="etiqueta" value="<?php echo $facultad->etiqueta; ?>" class="form-control" placeholder="Ingrese una descripción" required>
    </div>

    <div class="form-group">
        <label>Colores</label>
        <select name="color" class="form-control">
        <?php foreach($this->model->ListarColores() as $r): ?>
        <option value="<?php echo $r->id; ?>"
        <?php if ($facultad->color == $r->id) {
            echo " selected";
        
        }?>><?php echo $r->etiqueta_color; ?></option>
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