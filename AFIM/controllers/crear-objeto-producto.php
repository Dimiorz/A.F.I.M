<?php 

if(isset($_GET['id'])){
require_once("db.php");

    $ID = $_GET['id']; 
    $query5 = "SELECT * FROM productos WHERE ID_productos = $ID";
$resultado5 = mysqli_query($conexion, $query5);

$res = mysqli_fetch_array($resultado5);

$idp =  $res['ID_productos'];
$nom =$res['nombre'];
$exis =$res['existencias'];
$pc =$res['precio_compra'];



class Producto {

    // Declaración de una propiedad
    public $id = null;
    public $nombre = null;
    public $existencias = null;
    public $precioCompra = null;

}

$prod = new Producto();
$prod->id=$idp;
$prod->nombre=$nom;
$prod->existencias=$exis;
$prod->precioCompra=$pc;

header("location: ../create-factura.php");
}

?>