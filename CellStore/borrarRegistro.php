 
<?php
error_reporting(0);
include("conexion.php");
$id = $_POST['num1'];



//$sql = "delete FROM articulos where id = ".$id;
//$result = $conn->query($sql); if ($id > 0) {

if (isset($id)) {
  $sql = "select * FROM stockarticulos where idArticulos = ".$id;
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $sql = "delete FROM stockarticulos where idArticulos = ".$id;
    $result = $conn->query($sql);
    echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';
  } else{
    echo '<script language="JavaScript">';
    echo 'alert("Error. ID no encontrado en la Base de Datos");';
    echo "</script>";
} //echo "<h3>ID no encontrado en la base de datos.</h3>";
//echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';

}
//if ($id > 0) {
//  $sql = "delete FROM articulos where id = ".$id;
//$result = $conn->query($sql);
//echo '<meta http-equiv="Refresh" content="0;URL=listadoStock.php">';
//}
$conn->close();
?>
</table>
</body>
</html>