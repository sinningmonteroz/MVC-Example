<h1 class="page-header">Plan Estudio</h1>


    <a class="btn btn-primary pull-right" href="?c=plan_estudio&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Asignatura</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Docente</th>
            <th style=" background-color: #5DACCD; color:#fff">Jornada</th>
            <th style=" background-color: #5DACCD; color:#fff">Programa Principal</th>
            <th style=" background-color: #5DACCD; color:#fff">Programa Secundario</th>          
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->nombres . " " . $r->apellidos; ?></td>
            <td><?php echo $r->jornada; ?></td>
            <td><?php echo $r->programa1; ?></td>
            <td><?php echo $r->programa2; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=cliente&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
