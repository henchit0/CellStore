<?php
error_reporting(0);
include("conexion.php");
$flag = false;

//No se utiliza isset, dado a que se utilizo la funcion de "Required" para cada campo
$id = $_POST['idArticulo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];


$sql =  'UPDATE stockarticulos SET'.' marca = "'.$marca.'", modelo = "'.$modelo.'", color = "'.$color.'", precio = '. $precio.', stock = '. $stock.'
where idArticulo ='. $id;

if ($conn->query($sql) === TRUE) {

   header ("Location: listadoStock.php?modificacion=exitosa");
   $conn->close();
   exit();

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();