!-- Button trigger modal -->

<?php

$serial = $_REQUEST['ID_clientes'];
$consulta = "SELECT * FROM clientes where id=$serial";
$clientes = mysqli_query($conexion, $consulta);

?>

<!-- Modal -->
<div class="modal fade" id="editarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar cliente</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="editar_cliente" name="editar_cliente">
                    <div id="resultados"></div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="col-sm-3 control-label">Primer Apellido</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="apellido1" name="apellido1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="col-sm-3 control-label">Segundo Apellido</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="apellido2" name="apellido2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cedula" class="col-sm-3 control-label">Cedula</label>
                        <div class="col-sm-8">
                            <input type="cedula" class="form-control" id="cedula" name="cedula">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="correo" class="form-control" id="correo" name="correo">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-sm-3 control-label">Telefono</label>
                        <div class="col-sm-8">
                            <input type="telefono" class="form-control" id="telefono" name="telefono">

                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php

?>