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
            <form action="/controller/controllerEmpleado.php" method="post">
            <div class="modal-body">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="user" id="" aria-describedby="helpId" placeholder="Usuario">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="clave">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="mail" id="" aria-describedby="helpId" placeholder="correo">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"></label>
                        <select class="form-control" name="rol" id="">
                            <option value="0">Inactivo</option>
                            <option value="1">Administrador</option>
                            <option value="2">Gerente</option>
                            <option value="3">Resepcionista</option>
                            <option value="4">Limpiesa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Apellidos">
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
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Permisos</th>
        <th>Aciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $conexion_ = new db();
      $result = $conexion_->conexion ("SELECT * FROM `usuarios` INNER JOIN empleado ON usuarios.IdUsuario = empleado.IdUsuario where usuarios.rol <>5; ");
      while($row = mysqli_fetch_array($result)){
      ?>
        <tr>
          <td><?php echo $row['IdUsuario'] ?></td>
          <td><?php echo $row['NombreUsuario'] ?></td>
          <td><?php echo $row['password'] ?></td>
          <td><?php echo $row['NombreEmpleado'] ?></td>
          <td><?php echo $row['ApellidoEmpleado'] ?></td>
          <td><?php echo $row['rol'] ?></td>
          <th>
            <a href=""class="btn btn-warning btn-lg"> Editar</a>
            <a href="<?php include_once("../Model/modelEmpleado.php"); $delete = new Empleado(); $delete -> delete($row['IdEmpleado']); ?>" class="btn btn-danger btn-lg"> Eliminar</a>
          </th>
        </tr>
      <?php  }?>
    </tbody>
  </table>
</div>

<?php include_once("../includes/fooder.php") ?>