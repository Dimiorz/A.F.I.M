<?php
require_once("controllers/db.php");

$query ="SELECT * FROM facturas";

$query2 = "SELECT * FROM clientes, facturas 
WHERE id_cliente_FK = ID_clientes";
/* $registro = mysqli_query($conexion, $query); */
$registro2 = mysqli_query($conexion, $query2);


/* if (!$registro2) {
header("location: index.php");
} else {
    header("location: LICENSE");
} */


?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Facturas

    </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

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

                <!-- Encabezado de la pagina-->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Facturas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Facturas
                            </li>
                        </ol>
                    </div>
                    
                </div>
                <!-- /.row -->
                <hr>
                <!-- Tabla de facturas -->
                <div class="row">
                <a class="btn btn-success" href="create-factura.php">Nueva factura</a>
                    <div class="col-lg-12">
                        <h2>Historial de facturas</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha</th>
                                        <th>Nombre del cliente</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($reg = mysqli_fetch_array($registro2)) {
                                        
                                        
                                        ?>
                                    <tr>

                                        <td><?php echo $reg['ID_factura'];?></td>
                                        <td><?php echo $reg['fecha_creada']; ?></td>
                                        <td><?php echo $reg['nombre']; ?></td>
                                        <td><?php echo "mundo"; ?></td>
                                    </tr>

                                    <?php
                                    }
                            
                                    ?>
                                </tbody>
                            </table>
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

</body>

</html>