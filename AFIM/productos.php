<!DOCTYPE html>
<html lang="en">

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

                            <!-- Modal -->
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
                                            <form action="">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Nombre del producto</label>
                                                        <input class="form-control" placeholder="Sebastián">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label>Existencias</label>
                                                            <input class="form-control" placeholder="302011000">
                                                        </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="fecha">Lote :</label>

                                                    <input type="date" id="fecha" name="fecha" value="" min="2010-01-01"
                                                        max="2018-12-31">
                                                </div>

                                                <div class="col-lg-12">
                                                    <label for="fecha">Fecha de vencimiento:</label>

                                                    <input type="date" id="fecha" name="fecha" value="" min="2010-01-01"
                                                        max="2018-12-31">
                                                </div>

                                                <div class="col-lg-12">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label>Precio de compra</label>
                                                            <input class="form-control" placeholder="99999999">
                                                        </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <label for="fecha_pago">Seleccione una opción</label>
                                                    <select name="fecha_pago" id="fecha_pago">
                                                        <option value="">Opcion1</option>
                                                        <option value="">Opcion2</option>
                                                        <option value="">Opcion4</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <tr>
                                    <td>/index.html</td>
                                    <td>1265</td>
                                    <td>32.3%</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                    <td><button class="btn btn-sm btn-primary">Editar</button>
                                        <button class="btn btn-sm btn-danger">Eliminar</button></td>

                                </tr>
                                <tr>
                                    <td>/about.html</td>
                                    <td>261</td>
                                    <td>33.3%</td>
                                    <td>$234.12</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                </tr>
                                <tr>
                                    <td>/sales.html</td>
                                    <td>665</td>
                                    <td>21.3%</td>
                                    <td>$16.34</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                </tr>
                                <tr>
                                    <td>/blog.html</td>
                                    <td>9516</td>
                                    <td>89.3%</td>
                                    <td>$1644.43</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                </tr>
                                <tr>
                                    <td>/404.html</td>
                                    <td>23</td>
                                    <td>34.3%</td>
                                    <td>$23.52</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                </tr>
                                <tr>
                                    <td>/services.html</td>
                                    <td>421</td>
                                    <td>60.3%</td>
                                    <td>$724.32</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                </tr>
                                <tr>
                                    <td>/blog/post.html</td>
                                    <td>1233</td>
                                    <td>93.2%</td>
                                    <td>$126.34</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                </tr>
                                <tr>
                                    <td>/blog/post.html</td>
                                    <td>1233</td>
                                    <td>93.2%</td>
                                    <td>$126.34</td>
                                    <td>$321.33</td>
                                    <td>$321.33</td>
                                </tr>
                            </tbody>
                        </table>
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

</body>

</html>