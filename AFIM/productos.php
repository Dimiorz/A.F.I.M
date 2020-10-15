<!DOCTYPE html>
<html lang="en">
<?php require('controllers/db.php'); ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Productos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Header y Sidebar -->
        <?php include_once("views/navbar-header.php");?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Productos
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Productos
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-lg-12">
                    <div class="row" style="width: 100%;">
                        <div class="col-lg-10">
                            <h2>Tabla de productos</h2>
                        </div>
                        <div class="col-lg-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-lg btn-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Añadir producto
                            </button>

                            <!-- Modal Crear-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Añadir un producto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Formulario -->
                                            <form action="controllers/guardarProducto.php" method="POST">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Nombre del producto</label>
                                                        <input class="form-control" name="nombreProducto">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label>Existencias</label>
                                                            <input class="form-control" placeholder="302011000"
                                                                name="existenciaProducto">
                                                        </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="fecha">Lote :</label>
                                                    <input type="date" placeholder="YYYY/MM/DD" name="loteProducto">
                                                </div>

                                                <div class="col-lg-12">
                                                    <label for="fecha">Fecha de vencimiento:</label>

                                                    <input type="date" value="" name="fechaVencimiento"
                                                        placeholder="YYYY/MM/DD">
                                                </div>

                                                <div class="col-lg-12">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label>Precio de compra</label>
                                                            <input class="form-control" placeholder="99999999"
                                                                name="precioCompra">
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        name="guardarProducto">Guardar producto</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <?php $registros = mysqli_query($conexion, "select * from productos") or die("Error en el query".mysqli_error($conexion));
                    
                    ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Existencias</th>
                                    <th>Lote</th>
                                    <th>Vencimiento</th>
                                    <th>Precio de compra</th>
                                    <th>Acciónes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                <tr>
                                    <td> <?php echo $reg['ID_productos'] ?></td>
                                    <td> <?php echo $reg['nombre'] ?></td>
                                    <td> <?php echo $reg['existencias'] ?></td>
                                    <td> <?php echo $reg['lote'] ?> </td>
                                    <td> <?php echo $reg['vencimiento'] ?> </td>
                                    <td> <?php echo $reg['precio_compra'] ?> </td>

                                    <td>
                                        <button class="btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modalActualizar" id="editar">Editar</button>

                                        <a class="btn btn-sm btn-danger">Eliminar</a>
                                    </td>
                                </tr>

                                <?php
                                }
                                mysqli_close($conexion);
            ?>
                            </tbody>
                        </table>

                        <!-- Modal Actualizar -->

                        <?php
    $id = $_REQUEST['ID_productos'];

    $registros = mysqli_query($conexion, "select * from productos
                        where ID_productos= '$id'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {

        $nombre = $reg['nombre'];
        $existencias = $reg['existencias'];
        $lote = $reg['lote'];
        $vencimiento = $reg['vencimiento'];
        $precio_compra = $reg['precio_compra'];
       }

    ?>
                        <div class="modal fade" id="modalActualizar" tabindex="-1"
                            aria-labelledby="modalActualizarLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalActualizar">Actualziar producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Formulario -->
                                        <form action="controllers/guardarProducto.php" method="POST">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Nombre del producto</label>
                                                    <input class="form-control" name="nombreProducto"
                                                        value="<?php echo $reg['primer_nombre'] ?>"> </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label>Existencias</label>
                                                        <input class="form-control" placeholder="302011000"
                                                            name="existenciaProducto">
                                                    </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="fecha">Lote :</label>
                                                <input type="date" placeholder="YYYY/MM/DD" name="loteProducto">
                                            </div>

                                            <div class="col-lg-12">
                                                <label for="fecha">Fecha de vencimiento:</label>

                                                <input type="date" value="" name="fechaVencimiento"
                                                    placeholder="YYYY/MM/DD">
                                            </div>

                                            <div class="col-lg-12">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label>Precio de compra</label>
                                                        <input class="form-control" placeholder="99999999"
                                                            name="precioCompra">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="guardarProducto">Guardar producto</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>


    <!-- Custom scripts -->
    <script>
        $('#editar').on("click", function () {
            console.log(this);
        });
    </script>
</body>

</html>