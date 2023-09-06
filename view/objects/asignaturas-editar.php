<h1 class="page-header">
    <?php echo $asignaturas->id != null ? $asignaturas->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=asignaturas">Asignaturas</a></li>
  <li class="active"><?php echo $asignaturas->id != null ? $asignaturas->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=asignaturas&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $asignaturas->id; ?>" />
    <div class="form-group">
        <label>Nombre de asignaturas</label>
        <input type="text" name="nombre" value="<?php echo $asignaturas->nombre; ?>" class="form-control" placeholder="Ingrese el nombre de la asignatura" required>
    </div>

    <div class="form-group">
        <label>Créditos</label>
        <select name="creditos" class="form-control">
        <?php foreach($this->model->ListarCreditos() as $r): ?>
        <option value="<?php echo $r->id; ?>"
        <?php if ($asignaturas->creditos == $r->id) {
            echo " selected";
        }?>><?php echo $r->creditos; ?></option>
        <?php endforeach; ?>
        </select>
    </div>

    <input type="hidden" name="creador" value="<?php echo $asignaturas->creador; ?>" />
     
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