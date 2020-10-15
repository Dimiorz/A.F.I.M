<?php 
require_once("db.php");

$ID_clientes= $_GET['ID_clientes'];

// echo $ID_clientes;

$registros = mysqli_query($conexion, "select ID_clientes from clientes where ID_clientes ='$ID_clientes'")or
die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {   
    mysqli_query($conexion, "delete from clientes where ID_clientes='$_REQUEST[ID_clientes]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    
    header('Location: ../index.php');
    } else {
    echo "No existe un usuario con este ID/Cedula.";
    }
    mysqli_close($conexion);