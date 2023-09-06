
<form class="form-signin" action="?c=login&a=Comprobar" method="post" enctype="multipart/form-data">
<h1 class="page-header">Iniciar sesión</h1>
    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="usuario" value="" class="form-control" placeholder="Ingrese documento" required>
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="password" value="" class="form-control" placeholder="Ingrese contraseña" required>
    </div>
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
    <br>
    <?php 
    if(isset($_GET['m'])){
        echo "Error en los datos, compruebe los datos";
    }else{
        echo "<br>";
    }
    ?>
</form>

</body>
</html>
