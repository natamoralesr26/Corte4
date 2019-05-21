<?php include('../templates/header.php'); ?>
<div class="container">
<form class="form-group" action="resultadoCrear.php" method="post">
    <input class="form-control" type="text" name="id_empresa" id="id_empresa" placeholder="&#128100; id_empresa">
    <input class="form-control" type="text" name="nombre" id="nomre" placeholder="&#128100; Nombre">
    <input class="form-control" type="text" name="telefono" id="telefono" placeholder="&#128100; Telefono">
    <input class="form-control" type="text" name="direccion" id="direccion" placeholder="&#128100; Direccion">
    <input class="btn btn-primary" type="submit" value="Crear Usuario">
</form>
</div>


<?php include('../templates/footer.php'); ?>
