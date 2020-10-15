<head>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<?php require('db.php'); 

if(isset($_POST['guardarProducto'])){
$nombreProducto = $_POST['nombreProducto'];
$existenciaProducto = $_POST['existenciaProducto'];
$loteProducto =$_POST['loteProducto'];
$fechaVencimiento = $_POST['fechaVencimiento'];
$precioCompra = $_POST['precioCompra'];

$query = "INSERT INTO productos(nombre, existencias,lote,vencimiento,precio_compra) VALUES ('$nombreProducto','$existenciaProducto','$loteProducto','$fechaVencimiento','$precioCompra')";

$resultado= mysqli_query($conexion,$query);

if(isset($resultado)){
    echo "
        <div class='container'>
        <div class='alert alert-success' role='alert'>
        <h1>PRODUCTO GUARDADO!</h1>
        <h4>se ha guardado su producto</h4>
        <p>Serás redireccionado en <span id='counter'>1</span> segundo(s).</p>
    </div>
    </div>
    <script type='text/javascript'>
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) <= 0) {
                location.href = '../productos.php';
            }
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
        setInterval(function () {
            countdown();
        }, 1000);
    </script>";
} else{
    echo "
        <div class='container'>
        <div class='alert alert-danger' role='alert'>
        <h1>DATOS NO ACTUALIZADOS!</h1>
        <h4>Contraseña incorrecta</h4>
        <p>Serás redireccionado en <span id='counter'>5</span> segundo(s).</p>
    </div>
    </div>
    <script type='text/javascript'>
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) <= 0) {
                location.href = '../../perfil.php';
            }
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
        setInterval(function () {
            countdown();
        }, 1000);
    </script>";
}
}