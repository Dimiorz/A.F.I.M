<?php 
require_once("db.php");

$ID_productos= $_GET['ID_productos'];

// echo $ID_productos;

$registros = mysqli_query($conexion, "select ID_productos from productos where ID_productos ='$ID_productos'")or
die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {   
    mysqli_query($conexion, "delete from productos where ID_productos='$_REQUEST[ID_productos]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    
    header('Location: ../productos.php');
    } else {
    echo "No existe un usuario con este ID/Cedula.";
    }
    mysqli_close($conexion);