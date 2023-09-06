<h1 class="page-header">Lista de docentes</h1>


    <a class="btn btn-primary pull-right" href="?c=cliente&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">DNI</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombres</th>
            <th style=" background-color: #5DACCD; color:#fff">Apellidos</th>
            <th style=" background-color: #5DACCD; color:#fff">Facultad</th>
            <th style=" background-color: #5DACCD; color:#fff">Perfil docente</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Contrato</th>            
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->identidad; ?></td>
            <td><?php echo $r->nombres; ?></td>
            <td><?php echo $r->apellidos; ?></td>
            <td><?php echo $r->facultad; ?></td>
            <td><?php echo $r->perfil_docente; ?></td>
            <td><?php echo $r->contrato; ?></td>
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
