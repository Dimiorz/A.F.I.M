<head>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
// Incluir archivo de base de datos
require_once("db.php");
// Funcion para el botón enviar

if(isset($_POST['guardarCliente'])){
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 =$_POST['apellido2'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO clientes(nombre,apellido1,apellido2,cedula,correo, telefono) VALUES ('$nombre','$apellido1','$apellido2','$cedula','$correo','$telefono')";

$resultado= mysqli_query($conexion,$query);

}
if($resultado){
    header("location: ../index.php");
}else{
    echo("no sirver");
    }

?>