<?php
error_reporting(0);
include("conexion.php");
$flag = true;
//No se utiliza isset, dado a que se utilizo la funcion de "Required" para cada campo
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql = "INSERT INTO stockarticulos (marca, modelo, color, precio, stock) VALUES ('".$marca."', '".$modelo."', '".$color."'," .$precio.", ".$stock.")";


if ($conn->query($sql) === TRUE) {
   $flag == flase;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

if ($flag == flase) {
			fwrite($archivo, json_encode($miObjeto)."\n");
			$flag = true;
				echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';
		}
fclose($archivo);


?>

</body>
</html>