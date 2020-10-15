<!-- Button trigger modal -->

<?php
$consulta = "SELECT * FROM productos";
$productos = mysqli_query($conexion, $consulta);

?>



<!-- Modal -->
<div class="modal fade" id="buscar-producto" tabindex="-1" role="dialog" aria-labelledby="buscar-productoLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="buscar-productoLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="">
          <div class="form-group">
            <div class="col-sm-6">
              <input type="text" class="form-control" id="q" placeholder="Buscar productos" name="texto">
            </div>
            <input type="submit" name="enviar" class="btn btn-default" value="Buscar">
          </div>
        </form>
        <hr>
        <br>

        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Cantidad </th>
              <th scope="col">Precio</th>
              <th scope="col">Agregar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($prod = mysqli_fetch_array($productos)){

            
            ?>
            <tr>
              <th scope="row"><?php echo $prod['ID_productos']; ?></th>
              <td><?php echo $prod['nombre']; ?></td>
              <td><input class="form-control" style="width: 50%;" type="number" name="" value="<?php echo $prod['existencias']; ?>" id=""></td>
              <td><?php echo $prod['precio_compra']; ?></td>
              <td> <a class="btn btn-success" href="../controllers/crear-objeto-producto.php?id=<?php echo $prod['ID_productos'];?> ">+</a> </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>