<?php include_once("../Model/db.php") ?>
<?php include_once("../includes/header.php") ?>
<div class="container-lg my-4" style="padding-top: 5%">

</div>

<div class="container-lg my-4">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Nit</th>
        <th>Habitacion</th>
        <th>Descripcion</th>
        <th>Total</th>
        <th>Aciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $conexion_ = new db();
      $result = $conexion_->conexion ("SELECT * FROM `encabezado` INNER JOIN detalleencabezado ON detalleencabezado.idencabezado = detalleencabezado.idencabezado INNER JOIN habitaciones ON detalleencabezado.IdHabiatciones = habitaciones.IdHabiatciones INNER JOIN clientes ON encabezado.IdClientes = clientes.IdClientes; ");
      while($row = mysqli_fetch_array($result)){ 
      ?>
      
        <tr>
          <td><?php echo $row['idencabezado'] ?></td>
          <td><?php echo $row['NombreCliente'] ?></td>
          <td><?php echo $row['ApellidoCliente'] ?></td>
          <td><?php echo $row['Nit'] ?></td>
          <td><?php echo $row['NumeroHabitacion'] ?></td>
          <td><?php echo $row['DescripcionHabitacion'] ?></td>
          <td><?php echo $row['total'] ?></td>
          
          <th>
            <a href="../controller/controllerEmpleado.php?id=<?php echo $row['IdUsuario'] ?>" class="btn btn-danger btn-lg"> Eliminar</a>
          </th>
        </tr>
      <?php  }?>
    </tbody>
  </table>
</div>

<?php include_once("../includes/fooder.php") ?>