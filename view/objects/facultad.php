<h1 class="page-header">Facultades</h1>


    <a class="btn btn-primary pull-right" href="?c=facultad&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:180px; background-color: #5DACCD; color:#fff">Facultad</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Descripción</th>
            <th style=" background-color: #5DACCD; color:#fff">Color</th>            
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->facultad; ?></td>
            <td><?php echo $r->etiqueta; ?></td>
            <td><?php echo $r->etiqueta_color; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=facultad&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=facultad&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
