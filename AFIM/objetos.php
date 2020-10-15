<?php

class Factura{
   public $id;  
   public $fecha_creada;  
   public $iva = 19;  
}


$factura = new Factura;
/* $factura->iva = "hola"; */

echo "hola $factura->iva ";


?>

<form action="" method="POST" class="">
                            <div class="row">
                                <div class="form-group row col-lg-2 ">
                                    <label for="cliente">Cliente</label>
                                    <input class="form-control" type="text" name="cliente" id="cliente">
                                </div>

                                <div class="form-group col-lg-2">
                                    <label for="telefono">Telefono</label>
                                    <input class="form-control" type="text" name="telefono" id="telefono">
                                </div>

                                <div class="form-group col-lg-2">
                                    <label for="correo">Correo</label>
                                    <input class="form-control" type="text" name="correo" id="correo">
                                </div>
                            </div>
                            <div class="row">


                                <div class="form-group col-lg-2">
                                    <label for="fecha">Fecha</label>
                                    <input class="form-control" type="date" name="fecha" id="fecha">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="tipo_pago"> Metodo de pago</label>
                                    <select class="form-control" name="tipo_pago" id="">
                                        <option selected value="0">Pago</option>
                                        <option value="1">Efectivo</option>
                                        <option value="2">Tarjeta debito/credito</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </form>


                        <?php


function Consultar($crit )
{
  require_once("../controllers/db.php");
  $query = "SELECT * FROM productos WHERE ID_producto = $crit or nombre = $crit";
  $resultado = mysqli_query($conexion, $query);

  return($resultado);
};

if(isset($_POST['enviar'])){
  $criterio = $_POST['texto'];
  Consultar($criterio);
}

if(isset($resultado)){
  
}
?>