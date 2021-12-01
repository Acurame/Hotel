<?php include_once("../Model/db.php") ?>
<?php include_once("../includes/header.php") ?>
<div class="container-lg my-4" style="padding-top: 5%">

<button type="button" class="btn btn-outline-success btn-lg" data-bs-toggle="modal" data-bs-target="#Crear">
  Crear
</button>


<div class="modal fade" id="Crear" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/controller/controllerCliente.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="user" aria-describedby="helpId" placeholder="Usuario">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="password" class="form-control" name="password" aria-describedby="helpId" placeholder="clave">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="mail" aria-describedby="helpId" placeholder="correo">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Apellidos">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="nit" id="" aria-describedby="helpId" placeholder="Nit">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="addres" id="" aria-describedby="helpId" placeholder="Dirección">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="create" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

</div>

<div class="container-lg my-4">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Codigo</th>
        <th>Usuario</th>
        <th>Clave</th>
        <th>Correo</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Nit</th>
        <th>Dirección</th>
        <th>Aciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $conexion_ = new db();
      $result = $conexion_->conexion ("SELECT * FROM `usuarios` INNER join clientes on usuarios.IdUsuario = clientes.IdUsuario WHERE usuarios.rol = 0;");
      while($row = mysqli_fetch_array($result)){ 
      ?>
      
        <tr>
          <td><?php echo $row['IdUsuario'] ?></td>
          <td><?php echo $row['NombreUsuario'] ?></td>
          <td><?php echo $row['password'] ?></td>
          <td><?php echo $row['Correo'] ?></td>
          <td><?php echo $row['NombreCliente'] ?></td>
          <td><?php echo $row['ApellidoCliente'] ?></td>
          <td><?php echo $row['Nit'] ?></td>
          <td><?php echo $row['Direccion'] ?></td>
          <th>
            <a href="../controller/controllerEmpleado.php?id=<?php echo $row['IdUsuario'] ?>" class="btn btn-danger btn-lg"> Eliminar</a>
          </th>
        </tr>
      <?php  }?>
    </tbody>
  </table>
</div>

<?php include_once("../includes/fooder.php") ?>