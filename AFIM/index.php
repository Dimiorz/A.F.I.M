<!DOCTYPE html>
<html lang="en">
<?php require('controllers/db.php'); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AFIM</title>

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
        <?php include_once("views/navbar-header.php"); 
        
        if(isset($conexion)){
            echo "conectada";
        }
        else{
            echo "no conectada";
        }
        ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Cabecera de pagina -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inicio <small>Bienvenido!</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Nuevo Cliente
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- formulario para agregar Clientes -->
                <div>
                    <form action="controllers/guardarCliente.php" method="POST">
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Nombre del cliente</label>
                                <input class="form-control" name="nombre" placeholder="Sebastián">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Primer apellido del cliente</label>
                                <input class="form-control" name="apellido1" placeholder="perez">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Segundo apellido del cliente</label>
                                <input class="form-control" name="apellido2" placeholder="apalcio">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Cedula</label>
                                <input class="form-control" name="cedula" placeholder="302011000">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="correo"
                                    placeholder="Sebastian_43@correo.com" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Telefono</label>
                                <input class="form-control" name="telefono" placeholder="302011000">
                            </div>
                            <button class="btn btn-sm btn-primary" name="guardarCliente" id="guardarCliente">
                                Registrar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                    </form>

                    <!-- Table -->

                    <?php $registros = mysqli_query($conexion, "select * from clientes") or die("Error en el query".mysqli_error($conexion));
                    
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Primer Apellido</th>
                                            <th>Segundo Apellido</th>
                                            <th>Cedula</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                while ($reg = mysqli_fetch_array($registros)) {
                                ?>
                                        <tr>
                                            <td> <?php echo $reg['ID_clientes'] ?></td>
                                            <td> <?php echo $reg['nombre'] ?></td>
                                            <td> <?php echo $reg['apellido1'] ?></td>
                                            <td> <?php echo $reg['apellido2'] ?> </td>
                                            <td> <?php echo $reg['cedula'] ?> </td>
                                            <td> <?php echo $reg['correo'] ?> </td>
                                            <td> <?php echo $reg['telefono'] ?> </td>

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

                                <!-- /.row -->
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

</body>

</html>