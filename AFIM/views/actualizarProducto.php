<?php require('db.php'); 
// echo "good";

$ID_productos= $_GET['ID_productos'];


$registros = mysqli_query($conexion, "select * from productos where ID_productos ='$ID_productos'")or
die("Problemas en el select:" . mysqli_error($conexion));

echo $ID_productos;

while ($reg = mysqli_fetch_array($registros)){
echo $reg['nombre'];
echo $reg['existencias'];
echo $reg['lote'];
echo $reg['vencimiento'];
echo $reg['precio_compra'];

}

if(isset($_POST['editar'])){
    $nombreProducto = "hola";
}
// $id = $_REQUEST['ID_productos'];
// $registros = mysqli_query($conexion, "select * from productos") or
//                             die("Problemas en el select:" . mysqli_error($conexion));

                            

                        // if ($reg = mysqli_fetch_array($registros)) {

                        //     $nombre = $reg['nombre'];
                        //     $existencias = $reg['existencias'];
                        //     $lote = $reg['lote'];
                        //     $vencimiento = $reg['vencimiento'];
                        //     $precio_compra = $reg['precio_compra'];
                        //                                     }